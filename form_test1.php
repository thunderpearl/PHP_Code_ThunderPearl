

<html>
<head>
<title>form testing </title>
</head>


<body>

<form action="someform.php" method="post">
Name: <input type="text" name="Name" value="Jim" /><br />
Password: <input type="password" name="Password" maxlength="10" /><br />
Age range: <select name="Age">
<option value="Under 16">Under 16</option>
<option value="16-30" selected="selected">16-30</option>
<option value="31-50">31-50</option>
<option value="51-80">51-80</option>
</select><br /><br />
Life story:<br /> <textarea name="Story" rows="10" cols="80">Enter your life story here</textarea><br /><br />
<input type="radio" name="FaveSport" value="Tennis"> Tennis</input>
<input type="radio" name="FaveSport" value="Cricket"> Cricket</input>
<input type="radio" name="FaveSport" value="Baseball"> Baseball</input>
<input type="radio" name="FaveSport" value="Polo"> Polo</input>
<br />
<input type="checkbox" name="Languages[]" value="PHP" checked="checked"> PHP</input>
<input type="checkbox" name="Languages[]" value="CPP"> C++</input>
<input type="checkbox" name="Languages[]" value="Delphi"> Delphi</input>
<input type="checkbox" name="Languages[]" value="Java"> Java</input>
<br /><input type="submit" />
</form>
</body>
</html>