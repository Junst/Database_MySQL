<?php
    $conn = mysqli_connect('localhost', 'root', '031255', 'acl');

    $mid = $_GET['mid'];
    $mpass = $_GET['mpass'];
    $mname = $_GET['mname'];

    $sql = "INSERT INTO members(mid, mpass, mname) values ('$mid','$mpass','$mname');";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>사용자 등록 종료</title>
</head>
<body>
  <h3>사용자 등록 종료 - <?php echo $_GET['mid']?></h3>
  <h3> 아래와 같은 정보를 가진 사용자로 등록되었습니다. 비밀번호와 아이디는 반드시 기억해주시기 바랍니다.</h2>
  <h3> 아이디와 비밀번호 분실 시 검색은 거의 불가능합니다. 등록후 변경은 로그인을 하신 후 변경하시기 바랍니다.</h2>
  <p> 아이디 : <?php echo $_GET['mid']?></p>
  <p> 이름 : <?php echo $_GET['mname']?></p>
  <p> 비밀번호 : <?php echo $_GET['mpass']?></p>

  <p><a href="kjy.html">처음으로</a></p>
</body>
</html>