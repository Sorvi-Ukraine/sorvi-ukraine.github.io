<style type="text/css">
<!--
.стиль2 {
	font-size: 24px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
</style>
<p align="center"><img src="img/ok.png" width="256" height="256" /></p>
<p>
  <?php

 $result = mail("info.sorvi@ukr.net","Art:71083216-01","\nИмя: $_POST[fio] \nemail: $_POST[email] \nНомер телефона: $_POST[number] \nСообщение: $_POST[sms]");
 
 if ( $result) {
 echo "<p><center><h1>Спасибо за вашу покупку. Ожидайте звонка от оператора <br/> <br/> Sorvi <br/> Шопинг - клуб однодневных акций</h1></center></p>";

 }
 
 else {
  echo "<p>Сообщение не отправлено</p>";
 }

?>
</p>
<p align="center"><a href="index.html" class="стиль2">Вернутся на сайт</a> </p>
