<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Обмен ссылками</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<META name="Robots" content="none">
<style type="text/css">
<!--
.style1 {font-size: small}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	color: #000000;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	color: #000000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
h1 {
	font-size: large;
}
}
.style3 {font-size: x-small}
-->
</style>
</head>

<body>
<div align="center">
<h1 align="center">Обмен ссылками </h1>
<p align="center" class="style1">Правила каталога:</p>
<p align="justify">1. К участию в каталоге допускаются сайты, содержание которых не противоречит законодательству Р.Ф.<br>
  2. В каталоге размещаются прямые гипер-ссылки на сайты участников. Не принимаются кнопки, баннеры, мультиссылки и пр. Код не должен содержать тегов, выделяющих текст.<br>
  3. В каталоге размещаются сайты с содержанием на русском языке.<br>
  4.В каталог допускаются сайты, <span class="style2">разместившие обратную прямую ссылку на нас</span> (код ссылки см. ниже).<br>
5. Не допускается регистрация в каталоге отдельных разделов сайта или страниц.<br>
6. Описание к Вашей ссылке необходимо! Оно должно максимально полно отражать содержание сайта. Описание, составленное из набора ключевых слов не принимается.</p>
<p align="center" class="style2">Код нашей ссылки:</p>
<textarea cols="50" rows="2" wrap="VIRTUAL"><a href="http://www.pechati.su" target="_blank">Изготовление печатей</a></textarea>
<p align="center">&nbsp;</p>
</div>
<div align="center"><span class="style2">*</span> -  Поля обязательны для заполнения!!!</div>
<center>
<?
//определение адреса, на кот. будет отправляться форма
$mailto="pechatadmin@mail.ru";
if (empty($ok))
{
?> 
        <form action="<?echo $PHP_SELF;?>" method="post">
   
<table width="800" height="20" border="0" align="center" cellpadding="0" cellspacing="10">
    <tr>
        <td width="400"><div align="right" class="style1"> <p><span class="style2">*</span>Ваша ссылка (название не более 80 символов)</p>
            <p align="right" class="style3">html-код вида:<br> 
              &lt;a href="URL" target="_blank"&gt;Название ссылки&lt;/a&gt;</p>
          </div></td>
        <td width="400">
          <div align="left">
            <input type="text" name="link" size="50" maxlength="255">
        </div></td>
    </tr>

  <tr>
      <td width="400"><div align="right" class="style1"><span class="style2">*Адрес, где установлена наша ссылка</span>:</div></td>
      <td width="400">  <div align="left">
            <input name="blink" type="text" size="50" maxlength="50">
        </div></td>
    </tr>

 

   <tr>
      <td width="400"><div align="right" class="style1">Желаемая рубрика:</div></td>
      <td width="400"><div align="left">
          
          <select name="heading">
            <option>На выбор администрации</option>
            <option>Авто-Мото</option>
            <option>Бизнес и финансы</option>
            <option>Здоровье и медицина</option>
            <option>Изготовление печатей</option>
            <option>Интернет</option>
            <option>Компьютеры</option>
            <option>Культура и искусство</option>
            <option>Наука и техника</option>
            <option>Общество и политика</option>
            <option>Отдых и развлечения</option>
            <option>Полиграфия</option>
            <option>СМИ</option>
            <option>Товары и услуги</option>
            <option>Увлечения и хобби</option>
            <option>Юридические услуги</option>
          </select>
        </div></td>
    </tr>
   <tr>
        <td width="400"><div align="right" class="style1"><span class="style2">*</span>E-mail:</div></td>
        <td width="400"><div align="left">
          <input type="text" name="mailfrom" size="50" maxlength="150">
        </div></td>
    </tr>
    <tr>
        <td width="400"><div align="right" class="style1"><span class="style2">*</span>Описание (до 800 символов):</div></td>
        <td width="400"><div align="left">
          <input name="desc" type="text" id="desc" value="" size="50" maxlength="500">
        </div></td>
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
    if (empty($desc))
    {
        $error .= "Не заполнено поле: <b>Описание</b><br>";
    }
	 if (empty($link))
    {
        $error .= "Не заполнено поле: <b>Ваша ссылка</b><br>";
    }
	 if (empty($blink))
    {
        $error .= "Не заполнено поле: <b>Адрес с нашей ссылкой</b><br>";
    }
    if ($error)
    {
        echo $error;
        echo "<br><a href=\"javascript:history.back()\" class=\"text\">Вернуться назад</a>";
        exit;
    }
        //формируем тело и тему сообщения
    $subject="Обмен ссылками c photopolymer $mailfrom";
    $body="Ссылка:\n$link\n\nE-mail:\n$mailfrom\n\nРубрика:\n$heading\n\nАдрес с нашей ссылкой:\n$blink\n\nОписание:\n$desc";
    //конвертируем из win в koi
        $body=convert_cyr_string (stripslashes($body),w,k);
    $subject=convert_cyr_string (stripslashes($subject),w,k);
    //отправляем по почте...
        $sucess = mail($mailto, $subject, $body, "From: $email\nX-Mailer: PHP/" . phpversion());
        if ($sucess)
    {
        echo "Ваша ссылка отправлена. Ее точный адрес будет выслан на указанный Вами e-mail. Спасибо!";
       
    }
}
?>
</center>

</body>
</html>
