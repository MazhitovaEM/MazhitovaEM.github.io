
function Complete()
	{
    var w = window.open();
    var name ="Имя: "+ document.form.name.value;
    var nSelectedIndex = document.form.subject.selectedIndex;
    var subject ="Выбран предмет: " + document.form.subject.options[nSelectedIndex].value;
    w.document.write(name+'<br/>'+ subject);
  }
	
  function Complete1()
  {
    var name ="Имя: "+ document.form.name.value;   
    var nSelectedIndex = document.form.subject.selectedIndex;
    var subject ="Выбран предмет: " + document.form.subject.options[nSelectedIndex].value;
     alert(name+'\n' +subject)
  }