<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Обработка формы PHP</TITLE>
</HEAD>
<!-- Тело страницы-->
<BODY>
<?php 
echo ("Добро пожаловать, " .$_GET["name"] . "!" . "<br>");
echo ("<i>" ."Проверьте введенные данные: " . "</i>" . "<br>");

if(isset($_GET["name"]) && $_GET["name"] !== "")
{ 
  $aname=$_GET["name"];
  echo  ("Имя: " . $aname . "<br/>"); 
}
else
{ 
  echo ("Имя: Данные не указаны" . "<br/>"); 
}
if(isset($_GET["family"]) && $_GET["family"] !== "")
{ 
  $afamily=$_GET["family"];
  echo  ("Фамилия: " . $afamily . "<br/>"); 
}
else
{ 
  echo ("Фамилия: Данные не указаны" . "<br/>"); 
}
if(isset($_GET["login"]) && $_GET["login"] !== "")
{ 
  $alogin=$_GET["login"];
  echo  ("Логин: " . $alogin . "<br/>"); 
}
else
{ 
  echo ("Логин: Данные не указаны" . "<br/>"); 
}
if(isset($_GET["pass"]) && $_GET["pass"] !== "")
{ 
  $apass=$_GET["pass"];
  echo  ("Пароль: " . $apass . "<br/>"); 
}
else
{ 
  echo ("Пароль: Данные не указаны" . "<br/>"); 
}
if(isset($_GET["time"]))
{
  $atime=$_GET["time"];
  echo ("Выбранное время: " . $atime . "<br/>");
}
else  echo("Выбранное время: Вы не выбрали время" . "<br/>");
if(isset($_GET["view"]))
{
  $aview = $_GET["view"];
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
if(isset($_GET["subject"]) && $_GET["subject"] !== "")
{ 
  $asubject=$_GET["subject"];
  echo  ("Выбранный предмет: " . $asubject . "<br/>"); 
}
else
{ 
  echo ("Выбранный предмет:: Данные не указаны" . "<br/>"); 
}
if(isset($_GET["text"]) && $_GET["text"] !== "")
{ 
  $atext=$_GET["text"];
  echo  ("Дополнительная информация: " . $atext . "<br/>"); 
}
else
{ 
  echo ("Дополнительная информация: Данные не указаны" . "<br/>"); 
}
?>
</BODY>
</HTML>