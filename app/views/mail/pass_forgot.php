
<div style="background:#eee;padding:30px;">
	<div style="background:#fff;padding: 15px 20px;width: 550px;border: 1px solid #e3e3e5;border-radius:3px;margin: 0 auto;font: normal 13px/19px Verdana;box-shadow: 0 3px 7px rgba(0,0,0,.1);">
		<h2 style="font:normal 21px/48px Arial;color: #222;padding: 0 0 0 68px;background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAABKVBMVEVHcEyBo6GBo6GBoqCBo6CCoqCCoZ+Co6GBoZ+LoqJ/oKCCo6CAp52Co6GAo5+CpKCBoaGAoZ+BoqCDoqGCo6GBoqGBoqCCo6GAo6CCo6KAoqGCo6GCoaGAoZ+Co6GCoaGCoqCBop9/oJ6CoaF/n5+Co5+CoqGCo6Hx69GAoJ6BoqDw6tDv6c9/n53m48pSXXPp5czDzLvr582mt618nJq2wbKRq6SWrqjJz73i4Mlwi428x7dcb3mIpaLd2cJ3lJGJjpRSXXTRz7lqhIWrvLCeq6B0kY+xvrB5mJZUYnTQ1MGns6awtKqSp595j4ydsKaWoJRecXpmgIJnf4XW2MOEpKHM0r9uioqIo59SX3KsrqiFmZGkrqDDw7CnraNXaXHX2sXHyLTX0rwvKqOYAAAAJ3RSTlMAZPjW9Y3zE/0FF24bk80jUO7palTJ3rpadPH9SvZ7KYez9rQQxc8DeY0YAAACb0lEQVR4Xo3UZ0PqMBiG4QgtbdkiDkQ9LnyStsw93Hvvcfb6/z/iNBI4panA9fl+Y2JCiSS6EJufm9YD03PzsYUwGUOLxDEkHtFG5NFYAJJ1NUr8GSsB+FIyhl//KYgPbSXkPq1ghFDS28/oGCk75ekxwg64oYn0qPUvX7vHLwzZpOu8I/Zv/qaU2vvnwOLg5EZwTE/3K3cA4oYYWBnbU3rGAGTE/QbG97RbAxAKEy42QU9/8gGovNcCE/Rft004FP4SI5P0Bw8M3IwzEJ+kL27nweUIiU7U9wegkYUJ+l+PT3voSZPY2L548WaiTyXzY/vtc4aBDTLnSU3vfg6e4BIk0/ivUS2XW+Vq09V/uSgema4kRXQMlKnFo4LtWv+xc1qDyzIJQGBtKrjWfzjHMGWwJdN299e99Y/y8EgNDt2mbuK8Yvsuwf6/tSv3xYOLI3itiYvbqXj7ym2n85aHlyqeRlOcwKJ9hRsGH0kSBld/rwvP7YqYpFYdPnRNPO8yT46BZrXQn6jnIcv1f0At3puOz1clsa3rGmT8a6atAzizacF8d3MoBq4YJKFN4lABVCl9hsmxH70B+xtkq4SLKkDj0mo3TS4v/kJpDxLxmSEZAF27dLzDB+5L9N13BkmE9BhbAHu12tUGY/e7vf7wFJJZgwiJEF4al3bh759Dsf6u9IrEx1hIZp2Jlm1Zlljfp9eXiMsUgFq9RfmTquye7Jn+V+CeyMK5tbuT+tnJ7SmDROf9kOQiHHnGmAnZ4hKRJOL40GyC+DAyIfgKRQziL6wqPvlqmHxMm8nBTc9NbZIxtLS6EUwtK6ngmprUiNc/tS4oi11zJywAAAAASUVORK5CYII=) no-repeat 0 50%;margin: 0;">
    Восстановление пароля
</h2>

		<div style="padding: 15px 0;">
    Уважаемый <b>{login}</b>. Вы сделали запрос на получение забытого пароля на сайте {site-link} Чтобы получить новый пароль, пройдите по ссылке ниже:
		</div>
		<a href="<?=$_SESSION['forgot']?>" style="width: 400px;margin:0 auto;display: block;background: #4CAF50 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAwCAIAAABfUYfWAAAAH0lEQVQImWMw6DdgYmBgYGJkZESlmZiwijPhEB8g9QD08gGkFcH1FgAAAABJRU5ErkJggg==) repeat-x 0 0;color: #fff;font-weight:bold; line-height: 44px;text-align: center;text-transform: uppercase;text-decoration: none;border-radius: 3px;text-shadow: 0 1px 3px rgba(0,0,0,.35);border: 1px solid #388E3C;box-shadow: inset 0 1px rgba(255,255,255,.4);">
    Восстановить пароль
</a>
		<div style="padding: 15px 0;">
    Если вы не делали запроса для получения пароля, то просто удалите данное письмо. Ваш пароль храниться в надежном месте и недоступен посторонним лицам.
		</div>
		<div style="font: normal 12px/23px monospace;color: #777;text-align: right;">
			<a href="{ip-link}" style="float:left;background: #F4511E url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAXCAIAAABF+LJYAAAALElEQVQImWN46CHBxMDAwMTIwMDEwMDAxMTICOEzovKZoPKMMD4jDvUMcHkAftIBjTUj46AAAAAASUVORK5CYII=) repeat-x 0 0;color:#fff;padding: 0 20px;border-radius: 2px;text-shadow: 0 1px 3px rgba(0,0,0,.3);text-decoration: none;">
    Сбросить IP
</a>
IP адрес отправителя: <b style="color: #222;">{ip}</b>
		</div>
	</div>
</div>
