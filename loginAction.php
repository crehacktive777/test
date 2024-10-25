<?
  @session_start();
  header("Content-Type: text/html; charset=UTF-8;");
  $db_conn = new mysqli("localhost", "root", "password", "test");
  $id = $_POST["id"];
  $pw = md5($_POST["pw"]);
  if(empty($id) || empty($pw)) {
    echo "<script>alert('공백이 존재합니다.');history.back(-1);</script>";
    exit();
  }
  $query = "select * from member where id='{$id}' and pw='{$pw}'";
  $tmp = $db_conn->query($query);
  $cnt = $tmp->num_rows;
  $user = $tmp->fetch_assoc();
  if($cnt == 0) {
    echo "<script>alert('아이디 혹은 패스워드가 잘못 되었습니다.');history.back(-1);</script>";
    exit();
  }  
  $_SESSION["id"] = $user["id"];
  echo "<script>location.href='index.php'</script>";
?>
