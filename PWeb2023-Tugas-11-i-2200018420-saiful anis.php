<!DOCTYPE html>
<html>
<head>
	<title>Form Handling in PHP</title>
</head>
<body>

<h2>Form Handling in PHP</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male<br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"]) || empty($_POST["email"])) {
    echo "Name, dan email are required.";
  } else {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);

    echo "<h3>Your Input:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Comment: " . $comment . "<br>";
    echo "Gender: " . $gender . "<br>";
  }
}

// Fungsi untuk membersihkan inputan
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</body>
</html>
