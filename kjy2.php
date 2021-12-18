import * from .env

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    $conn = mysqli_connect('localhost', 'root', process.env.SERECT, 'acl');
    
    $mid = $_GET['mid'];
    $mpass = $_GET['mpass'];
    $mname = $_GET['mname'];

    $result1 = mysqli_query($conn,"select * from members where mname = '$mname'");

    echo "입력된 폼 변수값 : " . $mname . "<br><br>\n";

	  echo "검색된 결과 ===><br><br>\n";
    while ( $row = mysqli_fetch_array($result1) ) {
      echo "인덱스: " . $row['mindex'] . "<br>\n";
		  echo "아이디: " . $row['mid'] . "<br>\n";
		  echo "비밀번호: " . $row['mpass'] . "<br>\n";
      echo "이름: " . $row['mname'] . "<br>\n";
	  }
?>
  <p><a href="kjy.html">처음으로</a></p>
</body>
</html>