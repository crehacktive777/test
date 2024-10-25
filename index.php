<?
  @session_start();
  header("Content-Type: text/html; charset=UTF-8;");
  if(empty($_session[“id”])) {
    echo "<script>alert('로그인 후 접근이 가능합니다.');location.href='index.php';</script>";
  }
?>

<h3>회원전용 페이지입니다.</h3>
<hr>
<?=$_SESSION["id"]?>반갑습니다~~
회원님들에게만 공개하는 정보입니다....<br>
>> 정보 : 신림동 맛집은 "~~~~"입니다.
<input type="button" onclick="location.href='logout.php'" value="로그아웃">
