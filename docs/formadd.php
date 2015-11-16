<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Заполнение формы</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<META name="Robots" content="none">
<style type="text/css">
<!--
.style1 {font-size: small}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	color: #333333;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
.style3 {color: #FF0000}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<div align="center"><span class="style2">*</span> - поля, обязательные для заполнения!!!</div>
<center>
<?
//определение адреса, на кот. будет отправляться форма
$mailto="pechatadmin@mail.ru";
if (empty($ok))
{
?> 
        <form action="<?echo $PHP_SELF;?>" method="post">
   
<table width="550" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="40%"><div align="right" class="style1">Ваше имя:
          </div></td>
        <td width="30%">
          <div align="left">
            <input type="text" name="username" size="30" maxlength="50">
        </div></td>
    </tr>

  <tr>
      <td width="40%"><div align="right" class="style1"><span class="style2">*</span> URL с нашей ссылкой:</div></td>
      <td width="30%">  <div align="left">
            <input type="text" name="urlback" size="30" maxlength="50">
        </div></td>
    </tr>

 

   <tr>
      <td width="40%"><div align="right" class="style1"><span class="style2">*</span> Рубрика:</div></td>
      <td width="30%"><div align="left">
          <select name="select">
            <option>Авто и мото</option>
            <option>Бизнес и финансы</option>
            <option>Здоровье и медицина</option>
            <option>Интернет</option>
            <option>Компьютеры</option>
            <option>Культура и искусство</option>
            <option>Наука и техника</option>
            <option>Общество и политика</option>
            <option>Отдых и развлечения</option>
            <option>СМИ</option>
            <option>Товары и услуги</option>
            <option>Увлечения и хобби</option>
          </select>
        </div></td>
    </tr>
   <tr>
        <td width="40%"><div align="right" class="style1"><span class="style2">*</span> E-mail:</div></td>
        <td width="30%"><div align="left">
          <input type="text" name="mailfrom" size="30" maxlength="50">
        </div></td>
    </tr>
    <tr>
        <td width="40%"><div align="right" class="style1"><span class="style2">*</span> html - код Вашей ссылки:</div></td>
        <td width="30%"><textarea name="question" cols="50" rows="10" wrap="PHYSICAL"></textarea></td>
    </tr>
    </table>
    <input type="submit" name="ok" value="Отправить">
    </form><br>

<?
}
else
{
    //проверяем  e-mail на корректность
        if(!preg_match("/^([a-z,0-9,_,\-,\.])+\@([a-z,0-9,_,\-])+(\.([a-z,0-9])+)+$/", $mailfrom))
    {
    $error = "Не верно заполнено поле: <b>E-mail</b><br>";
    }
    if (empty($question))
    {
        $error .= "Не заполнено поле: <b>html - код Вашей ссылки</b><br>";
    }
    if ($error)
    {
        echo $error;
        echo "<br><a href=\"javascript:history.back()\" class=\"text\">Вернуться назад</a>";
        exit;
    }
        //формируем тело и тему сообщения
    $subject="Обмен ссылками $mailfrom";
    $body="Имя:\n$username\n\nE-mail:\n$mailfrom\n\nРубрика:\n$select\n\nобратная ссылка:\n$urlback\n\nurl код:\n$question";
    //конвертируем из win в koi
        $body=convert_cyr_string (stripslashes($body),w,k);
    $subject=convert_cyr_string (stripslashes($subject),w,k);
    //отправляем по почте...
        $sucess = mail($mailto, $subject, $body, "From: $email\nX-Mailer: PHP/" . phpversion());
        if ($sucess)
    {
        echo "Ваш код отправлен. Ссылка на него будет выслана на указанный Вами e-mail после проверки администратором. Спасибо за интерес к нашему каталогу";
       
    }
}
?>
</center>
</body>
</html>
