<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
if (empty($name)){
exit("Вы ввели не всю информацию!<a href=send.html>Вернуться к заполнению формы</a>");
}
if (empty($email)){
exit("Вы ввели не всю информацию!<br><a href=send.html>Вернуться к заполнению формы</a>");
}
if (empty($mess)){
exit("Вы ввели не всю информацию!<br><a href=send.html>Вернуться к заполнению формы</a>");
}
else{
$to = "gula-dmitriy@mail.ru"; /*Указать свой адрес*/
$subject = "Сообщение с вашего сайта";
$message = "Имя пославшего: $name nЭлектронный адрес: $email nСообщение: $mess";
$send = mail ($to, $subject, $message, "Content-type:text/plain; Charset=windows-1251 rn");
}
if ($send == 'true')
{
echo "Спасибо за отправку вашего сообщения!<br><a href=index.html>Вернуться на главную!</a>";
}
else
{
echo "Ошибка. Сообщение не отправлено!";
}
?>