<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>����� ��������</title>
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
<h1 align="center">����� �������� </h1>
<p align="center" class="style1">������� ��������:</p>
<p align="justify">1. � ������� � �������� ����������� �����, ���������� ������� �� ������������ ���������������� �.�.<br>
  2. � �������� ����������� ������ �����-������ �� ����� ����������. �� ����������� ������, �������, ������������ � ��. ��� �� ������ ��������� �����, ���������� �����.<br>
  3. � �������� ����������� ����� � ����������� �� ������� �����.<br>
  4.� ������� ����������� �����, <span class="style2">������������ �������� ������ ������ �� ���</span> (��� ������ ��. ����).<br>
5. �� ����������� ����������� � �������� ��������� �������� ����� ��� �������.<br>
6. �������� � ����� ������ ����������! ��� ������ ����������� ����� �������� ���������� �����. ��������, ������������ �� ������ �������� ���� �� �����������.</p>
<p align="center" class="style2">��� ����� ������:</p>
<textarea cols="50" rows="2" wrap="VIRTUAL"><a href="http://www.pechati.su" target="_blank">������������ �������</a></textarea>
<p align="center">&nbsp;</p>
</div>
<div align="center"><span class="style2">*</span> -  ���� ����������� ��� ����������!!!</div>
<center>
<?
//����������� ������, �� ���. ����� ������������ �����
$mailto="pechatadmin@mail.ru";
if (empty($ok))
{
?> 
        <form action="<?echo $PHP_SELF;?>" method="post">
   
<table width="800" height="20" border="0" align="center" cellpadding="0" cellspacing="10">
    <tr>
        <td width="400"><div align="right" class="style1"> <p><span class="style2">*</span>���� ������ (�������� �� ����� 80 ��������)</p>
            <p align="right" class="style3">html-��� ����:<br> 
              &lt;a href="URL" target="_blank"&gt;�������� ������&lt;/a&gt;</p>
          </div></td>
        <td width="400">
          <div align="left">
            <input type="text" name="link" size="50" maxlength="255">
        </div></td>
    </tr>

  <tr>
      <td width="400"><div align="right" class="style1"><span class="style2">*�����, ��� ����������� ���� ������</span>:</div></td>
      <td width="400">  <div align="left">
            <input name="blink" type="text" size="50" maxlength="50">
        </div></td>
    </tr>

 

   <tr>
      <td width="400"><div align="right" class="style1">�������� �������:</div></td>
      <td width="400"><div align="left">
          
          <select name="heading">
            <option>�� ����� �������������</option>
            <option>����-����</option>
            <option>������ � �������</option>
            <option>�������� � ��������</option>
            <option>������������ �������</option>
            <option>��������</option>
            <option>����������</option>
            <option>�������� � ���������</option>
            <option>����� � �������</option>
            <option>�������� � ��������</option>
            <option>����� � �����������</option>
            <option>����������</option>
            <option>���</option>
            <option>������ � ������</option>
            <option>��������� � �����</option>
            <option>����������� ������</option>
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
        <td width="400"><div align="right" class="style1"><span class="style2">*</span>�������� (�� 800 ��������):</div></td>
        <td width="400"><div align="left">
          <input name="desc" type="text" id="desc" value="" size="50" maxlength="500">
        </div></td>
    </tr>
    </table>
    <input type="submit" name="ok" value="���������">
    </form><br>


<?
}
else
{
    //���������  e-mail �� ������������
        if(!preg_match("/^([a-z,0-9,_,\-,\.])+\@([a-z,0-9,_,\-])+(\.([a-z,0-9])+)+$/", $mailfrom))
    {
    $error = "�� ����� ��������� ����: <b>E-mail</b><br>";
    }
    if (empty($desc))
    {
        $error .= "�� ��������� ����: <b>��������</b><br>";
    }
	 if (empty($link))
    {
        $error .= "�� ��������� ����: <b>���� ������</b><br>";
    }
	 if (empty($blink))
    {
        $error .= "�� ��������� ����: <b>����� � ����� �������</b><br>";
    }
    if ($error)
    {
        echo $error;
        echo "<br><a href=\"javascript:history.back()\" class=\"text\">��������� �����</a>";
        exit;
    }
        //��������� ���� � ���� ���������
    $subject="����� �������� c photopolymer $mailfrom";
    $body="������:\n$link\n\nE-mail:\n$mailfrom\n\n�������:\n$heading\n\n����� � ����� �������:\n$blink\n\n��������:\n$desc";
    //������������ �� win � koi
        $body=convert_cyr_string (stripslashes($body),w,k);
    $subject=convert_cyr_string (stripslashes($subject),w,k);
    //���������� �� �����...
        $sucess = mail($mailto, $subject, $body, "From: $email\nX-Mailer: PHP/" . phpversion());
        if ($sucess)
    {
        echo "���� ������ ����������. �� ������ ����� ����� ������ �� ��������� ���� e-mail. �������!";
       
    }
}
?>
</center>

</body>
</html>
