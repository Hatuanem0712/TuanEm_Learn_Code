<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = $email = $gender = $comment = $SĐT = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $SĐT = test_input($_POST["SĐT"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Khai báo thông tin</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Họ tên: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  SĐT: <input type="text" name="SĐT">
  <br><br>
  Ghi chú: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Giới tính:
  <input type="radio" name="gender" value="female">Nam
  <input type="radio" name="gender" value="male">Nữ
  <input type="radio" name="gender" value="other">Khác
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Thông tin đã nhập:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $SĐT;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>