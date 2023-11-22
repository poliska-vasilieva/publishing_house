&lt;?php
require 'PHPMailerAutoload.php';
 
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$tel = $_POST['tel'];
$info = $_POST['info'];
$aud = $_POST['aud'];
$file = $_POST['file'];
 
$mail = new PHPMailer;
$mail-&gt;isSMTP();
$mail-&gt;Host = 'smtp.example.com';
$mail-&gt;SMTPAuth = true;
$mail-&gt;Username = 'pol.princessa@gmail.com';
$mail-&gt;Password = '%polcdo8P';
$mail-&gt;SMTPSecure = 'tls';
$mail-&gt;Port = 587;
 
$mail-&gt;setFrom($email, $name);
$mail-&gt;addAddress('pol.princessa@gmail.com');
$mail-&gt;isHTML(true);
 
$mail-&gt;Subject = 'Сообщение с формы обратной связи'; 
$mail-&gt;Body    = "ФИО: $name &lt;br&gt; Email: $email &lt;br&gt; Дата рождения: $date &lt;br&gt; Телефон: $tel &lt;br&gt; Информация о книге: $info &lt;br&gt; Аудитория: $aud &lt;br&gt; Файл: $file &lt;br&gt;";
 
if(!$mail-&gt;send()) {
    echo 'Ошибка при отправке сообщения.';
    echo 'Mailer Error: ' . $mail-&gt;ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено!';
}
?&gt;