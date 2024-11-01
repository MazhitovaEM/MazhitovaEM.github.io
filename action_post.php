<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Обработка формы PHP</TITLE>
</HEAD>
<!-- Тело страницы-->
<BODY>
  <!-- подключение стороннего файла-->
  <!--#include file="count.txt"--> 
<?php 

//счетчик посещений
$count_my_page = ("count.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo ($hits[0] . "<br>");


// установка cookie username и вывод приветствия
$value = $_POST["name"];
setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* срок действия 1 час */
if (isset($_COOKIE['TestCookie'])) 
{
echo ("Добро пожаловать, " . $_COOKIE["TestCookie"] . "!" . "<br>");
} 
else echo ("Добро пожаловать!" . "<br>");
//echo ("Добро пожаловать, " .$_POST["name"] . "!" . "<br>");
echo ("<i>" ."Проверьте введенные данные: " . "</i>" . "<br>");

if(isset($_POST["name"]) && $_POST["name"] !== "")
{ 
  $aname=$_POST["name"];
  echo  ("Имя: " . $aname . "<br/>"); 
}
else
{ 
  echo ("Имя: Данные не указаны" . "<br/>"); 
}
if(isset($_POST["family"]) && $_POST["family"] !== "")
{ 
  $afamily=$_POST["family"];
  echo  ("Фамилия: " . $afamily . "<br/>"); 
}
else
{ 
  echo ("Фамилия: Данные не указаны" . "<br/>"); 
}
if(isset($_POST["login"]) && $_POST["login"] !== "")
{ 
  $alogin=$_POST["login"];
  echo  ("Логин: " . $alogin . "<br/>"); 
}
else
{ 
  echo ("Логин: Данные не указаны" . "<br/>"); 
}
if(isset($_POST["pass"]) && $_POST["pass"] !== "")
{ 
  $apass=$_POST["pass"];
  echo  ("Пароль: " . $apass . "<br/>"); 
}
else
{ 
  echo ("Пароль: Данные не указаны" . "<br/>"); 
}
if(isset($_POST["time"]))
{
  $atime=$_POST["time"];
  echo ("Выбранное время: " . $atime . "<br/>");
}
else  echo("Выбранное время: Вы не выбрали время" . "<br/>");

if(isset($_POST["view"]))
{
  $aview = $_POST["view"];
  $N = count($aview);
  $v = "";
  echo("Выбранная форма контроля: ");
  for($i=0; $i<$N; $i++)
    {
      $v .= $aview[$i];
      if (($i+1) != $N) $v .= ", ";
    }
    echo($v . "<br>");
}
else  echo("Выбранная форма контроля: Вы не выбрали форму контроля". "<br/>");
if(isset($_POST["subject"]) && $_POST["subject"] !== "")
{ 
  $asubject=$_POST["subject"];
  echo  ("Выбранный предмет: " . $asubject . "<br/>"); 
}
else
{ 
  echo ("Выбранный предмет:: Данные не указаны" . "<br/>"); 
}
if(isset($_POST["text"]) && $_POST["text"] !== "")
{ 
  $atext=$_POST["text"];
  echo  ("Дополнительная информация: " . $atext . "<br/>"); 
}
else
{ 
  echo ("Дополнительная информация: Данные не указаны" . "<br/>"); 
}


?>
</BODY>
</HTML>