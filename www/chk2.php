<html>
<head>
<SCRIPT LANGUAGE="JavaScript">
if (document.getElementById("CheckAll").checked=true)
//function checkAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = true ;
}

function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = false ;
}
//  End -->
</script>

</head>
<body>
<form name="myform" action="checkboxes.asp" method="post">
<b>Your Favorite Scripts & Languages</b><br>
<input type="checkbox" name="list" value="1">Java<br>
<input type="checkbox" name="list" value="2">Javascript<br>
<input type="checkbox" name="list" value="3">Active Server Pages<br>
<input type="checkbox" name="list" value="4">HTML<br>
<input type="checkbox" name="list" value="5">SQL<br>

<input type="checkbox" name="CheckAll" value="Check All"
onClick="checkAll(document.myform.list)">
<input type="button" name="UnCheckAll" value="Uncheck All"
onClick="uncheckAll(document.myform.list)">
<br>
</form>
</body>
</html>