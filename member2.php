<!DOCTYPE HTML>
<html>
	<head>
		<title>회원가입</title>
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/member2.css">
	</head>
	<body>
		<header>
			<?php 
	        include "header.php";
	     	 ?>
		</header>
		<section>
		<div class="table_box">
			<h3>회원가입</h3>
		  <div id="line">
		  </div>
		  <p>회원정보는 개인정보취급방침에 따라 안전하게 보호되며 회원님의 명백한 동의 없이 공개 또는 제3자에게 제공되지 않습니다.</p>

		 <br>
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
						<td id="first">serial number</td>
						<td>
							<input id = "text" type="text" name="number" size="10" value="">
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
			<div id="button">
				<input id="button1" type ="submit" value="확인">
			<div>
			</div>
	</body>
</html>