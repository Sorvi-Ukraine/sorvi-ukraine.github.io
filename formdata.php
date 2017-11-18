<style type="text/css">
<!--
.стиль2 {
	font-size: 24px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
</style>
<p align="center">&nbsp;</p>
<p>
  <?php

 $result = mail("info.sorvi@ukr.net","ЗАЯВКА НА УСЛУГУ","\nИмя: $_POST[fio] \nemail: $_POST[email] \nНомер телефона: $_POST[number] \nСообщение: $_POST[sms]");
 
 if ( $result) {
 echo "<p><center><h1>Дякуємо за Ваше замовлення</h1></center></p>";

 }
 
 else {
  echo "<p>Сообщение не отправлено</p>";
 }

?>
</p>
<p align="center">&nbsp;</p>
