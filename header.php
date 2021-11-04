<?php
    session_start();
    $indexlink = "fire_run.php";
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>		
       

<?php
    if(!$userid) {
?>                
            <header id="line1">
                <a href="fire_run.php"><img id="main_logo" src="img/main_logo_1.png" alt="logo" title="logo"></a>
                <div id="login"><a href="member2.php">회원가입</a> | <a href="login.php">로그인</a></div>
            </header>
<?php
    } else {
                $logged = $username."(".$userid.")님 환영합니다!";
?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href=".php">로그아웃</a> </li>
                <li> | </li>
                <li><a href=".php">정보수정</a></li>
<?php
    }
?>