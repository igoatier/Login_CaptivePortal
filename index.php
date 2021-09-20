﻿<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>..:: Portal - Da Vinci ::..</title>
  
  <link rel="shortcut icon" href="favicon.ico" />
<style>
html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    display: table;
}
#content {
    font-family: 'Source Sans Pro', sans-serif;
	background: url(captiveportal-background) no-repeat center center fixed;
	background-image: url(captiveportal-background.jpg);
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}

.login-card {
  padding: 40px;
  width: 274px;
  /*background-color: #F7F7F7;*/
  background-color: #ffffff;
  margin: 0 auto 10px;
  border-radius: 6px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.603);
  overflow: hidden;
}

.login-card h1 {
  font-weight: 400;
  text-align: center;
  font-size: 2.3em;
  color: #1383c6;
}

.login-card h1 span {
	color: #f26721;
}

.login-card img {
	width: 100%;
	height: 100%;
}

.login-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
  cursor:pointer;
  border-radius: 10px;
}

.login-card input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  border-radius: 10px;
  padding: 0 10px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-card input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.login-submit {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
  height:40px;
}
.login-submit:disabled {
  opacity: 0.6;
}


.login-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-card a {
  text-decoration: none;
  color: #6666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-card a:hover {
  opacity: 1;
}

.login-help {
  width: 100%;
  text-align: center;
  font-size: 12px;
}

/** Checkbox **/
.list {
  list-style-type: none;
  padding: 0;
}

.list__item {
  margin: 0 0 .7rem 0;
  padding: 0;
}

label {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-ms-flex-align: center;
	align-items: center;
	text-align: left;
}

input[type=radio], 
input[type=checkbox] {
	-webkit-box-flex: 0;
	-webkit-flex: none;
	-ms-flex: none;
	flex: none;
	margin-right: 10px;
	float: left;
}
.error{
	font-size:14px;font-family:Arial,sans-serif;
	font-weight:700;
	height:25px;
	padding:0 8px;
	padding-top: 10px; 
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
	border:0;
	color:#fff;
	text-shadow:0 1px rgba(0,0,0,.1);
	background-color:#FF4242;
}
.login-card{
-webkit-animation:bounce-in 5s ease 0s 1 normal;
-moz-animation:bounce-in 5s ease 0s 1 normal;
-ms-animation:bounce-in 5s ease 0s 1 normal;
animation:bounce-in 5s ease 0s 1 normal;
}
h5{
  margin-top: 8px;
  margin-bottom: -10px;
  font-size: 12px;
}
h4{
  font-size: 12px;
  margin-top: 2px;
  font-weight: 300;
  color: #a0a0a0;
}

@-webkit-keyframes bounce-in {
0%{ opacity: 0; -webkit-transform: scale(0); transform: scale(0); }
50%{ opacity: 1; -webkit-transform: scale(1.0); transform: scale(1.0); }
70%{ -webkit-transform: scale(0.9); transform: scale(0.9); }
100%{ -webkit-transform: scale(10); transform: scale(10); }
}

@keyframes bounce-in {
0%{ opacity: 0; transform: scale(.3); }
50%{ opacity: 1; transform: scale(1.0); }
70%{ transform: scale(0.9); }
100%{ transform: scale(1); }
}

@media screen and (max-width: 450px){
	.login-card {
		width: 70% !important;
	}
	.login-card img {
		width: 40%;
		height: 40%;
	}
}

  </style>
</head>

<body>
<div id="content">
	<div class="login-card">
		<!--<img src="davinci.png"/>-->
        <img src="logo.png"/><br>
 		<h1></h1>
	  <form name="login_form" method="post" action="$PORTAL_ACTION$">
		<input type="text" name="auth_user" placeholder="Usuário" id="auth_user">
		<input type="password" name="auth_pass" placeholder="Senha" id="auth_pass">
		  <div class="login-help">
			<ul class="list">
				<li class="list__item">
				  <label class="label--checkbox">
					  <input  type="checkbox" class="checkbox" onchange="document.getElementById('login').disabled = !this.checked;">
					  <span style="color: #357ae8;">Eu concordo com os <a target="_blank" rel="noopener" href="http://bd.camara.gov.br/bd/bitstream/handle/bdcamara/18348/marco_civi_internet2ed.pdf?sequence=16">termos e licença </a></span>
				  </label>
				</li>
			</ul>
		  </div>
		<input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
    <input type="submit" name="accept" class="login login-submit" value="Conectar" id="login" disabled>
    
    <span style="font-weight: bold; color: #083f99;">Cólegio Leonardo Da Vinci</span><br>
    <h4>© Copyright 2010 - <script>document.write(new Date().getFullYear());</script></h4>
    <h5>Desenvolvido por <a href='http://191.242.64.178:888/pontotecnico/index.php/mine' target='_blank'>Igo Atiê</a></h5>
		<!---<span> © Copyright 2010 - <script>document.write(new Date().getFullYear());</script><a href='https://www.colegiodavinci.com.br/' target='_blank'><a target="_blank" rel="noopener" href="http://192.168.100.110:888/davinci/adm.php">Não sou Cadastrado</a></span>-->
	  </form>
	</div>
</div>
</body>
</html>
