<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>���������� �����</title>
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
<div align="center"><span class="style2">*</span> - ����, ������������ ��� ����������!!!</div>
<center>
<?
//����������� ������, �� ���. ����� ������������ �����
$mailto="pechatadmin@mail.ru";
if (empty($ok))
{
?> 
        <form action="<?echo $PHP_SELF;?>" method="post">
   
<table width="550" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="40%"><div align="right" class="style1">���� ���:
          </div></td>
        <td width="30%">
          <div align="left">
            <input type="text" name="username" size="30" maxlength="50">
        </div></td>
    </tr>

  <tr>
      <td width="40%"><div align="right" class="style1"><span class="style2">*</span> URL � ����� �������:</div></td>
      <td width="30%">  <div align="left">
            <input type="text" name="urlback" size="30" maxlength="50">
        </div></td>
    </tr>

 

   <tr>
      <td width="40%"><div align="right" class="style1"><span class="style2">*</span> �������:</div></td>
      <td width="30%"><div align="left">
          <select name="select">
            <option>���� � ����</option>
            <option>������ � �������</option>
            <option>�������� � ��������</option>
            <option>��������</option>
            <option>����������</option>
            <option>�������� � ���������</option>
            <option>����� � �������</option>
            <option>�������� � ��������</option>
            <option>����� � �����������</option>
            <option>���</option>
            <option>������ � ������</option>
            <option>��������� � �����</option>
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
        <td width="40%"><div align="right" class="style1"><span class="style2">*</span> html - ��� ����� ������:</div></td>
        <td width="30%"><textarea name="question" cols="50" rows="10" wrap="PHYSICAL"></textarea></td>
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
    if (empty($question))
    {
        $error .= "�� ��������� ����: <b>html - ��� ����� ������</b><br>";
    }
    if ($error)
    {
        echo $error;
        echo "<br><a href=\"javascript:history.back()\" class=\"text\">��������� �����</a>";
        exit;
    }
        //��������� ���� � ���� ���������
    $subject="����� �������� $mailfrom";
    $body="���:\n$username\n\nE-mail:\n$mailfrom\n\n�������:\n$select\n\n�������� ������:\n$urlback\n\nurl ���:\n$question";
    //������������ �� win � koi
        $body=convert_cyr_string (stripslashes($body),w,k);
    $subject=convert_cyr_string (stripslashes($subject),w,k);
    //���������� �� �����...
        $sucess = mail($mailto, $subject, $body, "From: $email\nX-Mailer: PHP/" . phpversion());
        if ($sucess)
    {
        echo "��� ��� ���������. ������ �� ���� ����� ������� �� ��������� ���� e-mail ����� �������� ���������������. ������� �� ������� � ������ ��������";
       
    }
}
?>
</center>
</body>
</html>
