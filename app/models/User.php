<?php
namespace app\models;

use ishop\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class User extends AppModel {

    public $attributes = [
        'login' => '',
        'password' => '',
        'name' => '',
        'email' => '',
        'address' => '',

    ];

    public $rules = [
        'required' => [
            ['login'],
            ['password'],
            ['name'],
            ['email'],
            ['address'],
        ],
        'email' => [
            ['email'],
        ],
        'lengthMin' => [
            ['password', 6],
        ]
    ];

    public function checkUnique(){
        $user = \R::findOne('user', 'login = ? OR email = ?', [$this->attributes['login'], $this->attributes['email']]);
        if($user){
            if($user->login == $this->attributes['login']){
                $this->errors['unique'][] = 'Этот логин уже занят';
            }
            if($user->email == $this->attributes['email']){
                $this->errors['unique'][] = 'Этот email уже занят';
            }
            return false;
        }
        return true;
    }

    public function login($isAdmin = false){
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if($login && $password){
            if($isAdmin){
                $user = \R::findOne('user', "login = ? AND role = 'admin'", [$login]);
            }else{
                $user = \R::findOne('user', "login = ?", [$login]);
            }
            if($user){
                if(password_verify($password, $user->password)){
                    foreach($user as $k => $v){
                        if($k != 'password') $_SESSION['user'][$k] = $v;
                    }
                    return true;
                }
            }
        }
        return false;
    }

    public static function checkAuth(){
        return isset($_SESSION['user']);
    }

    public static function isAdmin(){
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin');
    }
    public function forgot($data)
    {
        if(empty($data['email']) ) {
            $this->errors['error']['empty'] = 'Введите Email';
            return;
        }
        else
        {
            if($query = \R::findOne('user',"email = ?",[$data['email']]) && $query = \R::count('user','email = ?',[$data['email']]) == 1)

            {
                $expire = time() + 3600;
                $hash = md5($expire . $data['email']);
                $query = \R::dispense('forgot');
                $query->email = $data['email'];
                $query->hash = $hash;
                $query->expire = $expire;
                \R::store($query);
                if (\R::count('forgot', 'email = ?', [$data['email']]) > 0) {

                    $link = PATH . "/user/forgot/?forgot={$hash}";
                    $_SESSION['forgot'] = $link;

                    // Create the Transport
                    $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                        ->setUsername(App::$app->getProperty('smtp_login'))
                        ->setPassword(App::$app->getProperty('smtp_password'))
                    ;
                    // Create the Mailer using your created Transport
                    $mailer = new Swift_Mailer($transport);

                    // Create a message
                    ob_start();
                    require APP . '/views/mail/pass_forgot.php';
                    $body = ob_get_clean();


                    $message_client = (new Swift_Message("Запрос на восстановление пароля на сайте" . App::$app->getProperty('shop_name')))
                        ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
                        ->setTo($data['email'])
                        ->setBody($body, 'text/html')
                    ;

                    // Send the message
                    $result = $mailer->send($message_client);


                }

            }


        }
        unset($data['email']);

    }

    public function recovery()
    {
        $hash = $_GET['forgot'];

        if (empty($hash))
        {
            $_SESSION['error'] = 'Перейдите по корректной ссылке';
            return;
        }
        $query = \R::findOne('forgot','hash = ?', [$hash]);
        if (!$query)
        {
            $_SESSION['error'] = 'Ссылка устарела или вы перешли по некорректной ссылке. Пройдите процедуру восстановления пароля заново';
            return;
        }
        $now = time();
        if ($row = $query['expire'] - $now < 0)
        {
            $_SESSION['error'] = 'Ссылка устарела. Пройдите процедуру восстановления пароля заново';
            return;
        }
    }
    public function change_forgot_password()
{
    $data = $_POST;
    $now = time();
    if(empty($data['new_password']) ){
        $_SESSION['error'] = "Не введен пароль";
        return;
    }
    if(!$query =\R::findOne('forgot','hash = ?',[$data['hash']])) return;

   if($query['expire'] - $now < 0)
{
 \R::exec("DELETE FROM forgot WHERE expire < ? ",[$now]);
 return;
}
$password = password_hash($data['new_password'],PASSWORD_DEFAULT);
\R::exec("UPDATE user SET password  = ? WHERE email = ? ",[$password,$query['email']]);
    $_SESSION['success'] = "Вы успешно сменили пароль. Теперь можно авторизоваться";






}
}