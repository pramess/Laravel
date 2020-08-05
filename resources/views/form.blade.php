<html>
<head> 
	<title>Form</title>
</head>
<body>
<form action="/selamat-datang" method="POST" enctype="media type"> 
	@csrf
<font size="4"><h1> Buat Account Baru</h1></font>
<label>First Name :</label><br>
<br><input type="text" name="firstname"><br>
<br><label>Last Name :</label><br>
<br><input type="text" name="lastname"><br>
<br><label>Gender :</label><br>
<br><input type="radio" name="gender" value="male">Male
<br><input type="radio" name="gender" value="female">Female
<br><input type="radio" name="gender" value="other">Other<br>
<br><label> Nationality : </label><br>
<br><select name="option">
<option value="indonesia"> Indonesia</option>
<option value="english"> English</option>
</select><br>
<br><label>Language Spoken : </label><br>
	<br><input type="checkbox" name="checkbox">Bahasa Indonesia
	<br><input type="checkbox" name="checkbox">English
	<br><input type="checkbox" name="checkbox">Other<br>
	<br>
	<label>Bio : </label><br>
	<br><textarea name="textarea" cols="20" rows="5"> </textarea><br>

	<br><input type="submit" value="Submit">

</form> 
</body>
</html>