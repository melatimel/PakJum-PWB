<DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
  <form action="welcome.php" method="post">  
 <h2>Buat Account Baru</h2> 

 <h3>sign up Form</h3>  
 <bentuk tindakan = "/action_page.php" >
   <label for = "fname" >first name: </label><br>
<input type = "teks" id = "fname" name = "fname" value =><br>
<label for = "iname" >last name: </label><br>
  <input type = "teks" id = "iname" name = "iname" name = "iname" value =><br><br>


  <label for = "gender"> gender : </label><br></br>
  <input type="radio" id="male" name="gender" value="MALE">
  <label for="male">MALE</label><br>
  <input type ="radio" id="female" name ="gender" value="female">
  <label for ="female">FEMALE</label><br> 

 <label for ="nationality"> nartionality :</label><br>
  <select id="nationality" name="nationality">
    <option value="Indonesia">Indonesia</option>
    <option value="inggris">inggris</option>
      <option value="korea">korea</option><br></select>
      <br>

    <label for="language"></label><br></br>
      <input type="checkbox" id="bahasa" name ="language" value="bahasa indonesia">
      <label for="bahasa">bahasa Indonesia</label><br>
      <input type="checkbox" id="inggris" name ="language" value="inggris">
      <label for="inggris">inggris</label><br>
      <input type="checkbox" id="other" name ="language" value="other">
      <label for="other">Other</label><br></br>
     
<label for="bio">bio:</label><br>
  <textarea id="bio" name="bio" rows="8" cols="30"></textarea><br><br>
  <input type="submit">
</form>
</body>
</html>