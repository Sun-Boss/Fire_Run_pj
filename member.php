<!DOCTYPE html>
<html lang="en">
 <head>
  <title>회원가입 페이지</title>
  <link rel="stylesheet" type="text/css" href="css/member.css"/>
  <style>
	  input[type=text]:focus, input[type=password]:focus, textarea:focus { border : 2px solid #489CFF;}
  </style>
 </head>
 <body>
 	<?php 
        include "header.php";
      ?>
 	<form name="fruit" method="post" action="member_insert.php">
	<header>
  <h3>회원가입</h3>
  <div id="line">
  </div>
  <p>회원정보는 개인정보취급방침에 따라 안전하게 보호되며 회원님의 명백한 동의 없이 공개 또는 제3자에게 제공되지 않습니다.</p>
  </header>
 <br>
 <section>
	<table border ="1">
		<tbody>
			<tr>
				<td id="first">아이디 :</td>
				<td>
					<input id = "text" type="text" name="id" size="20" value="">
				</td>
			</tr>
			<tr>
				<td id="first">이름 :</td>
				<td>
					<input id = "text" type="text" name="name" size="20" value="">
				</td>
			</tr>
			<tr>
				<td id="first">비밀번호 :</td>
				<td>
					<input id = "text" type="password" name="pass" size="20" value="">
				</td>
			</tr>
			<tr>
				<td id="first">비밀번호 확인 :</td>
				<td>
					<input id = "text" type="password" name="pass_confirm" size="20" value="">
				</td>
			</tr>
			<tr>
				<td id="first">이메일</td>
				<td>
					<input id = "text" name="email1" type="text" size="20"> @ <input id = "text" name="email2" type="text" size="20">
				</td>
			</tr>

		</tbody>
	</table>
</section>
<center>
	<footer>
		<br>
		<input id="button1" type ="submit" value="확인">
	</footer>
	</center>
</body>
</html>
