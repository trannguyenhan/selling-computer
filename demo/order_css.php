<?php header("content-type: text/css")?>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	background: #fff;
	color: white;
	font-size: 24px;
	background-repeat: no-repeat;
	background-image: url("images/shipping-background.jpg");
}
h2 {
	text-align: center;
	margin-top: 30px;
	color: #d65218;
}
.container {
	width: 1000px;
	height: 900px;
	margin: 30px auto;
	border: 1px solid;
	padding: 50px 50px;
	background: #1f1f1f;
	opacity: 0.8;
	border-radius: 10px;
	box-shadow: 0 -1px 5px 0 #000;
}
.row {
	/*position: relative;*/
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	align-items: center;
	/*border: 1px solid;*/
}
.col-2 {
/*	position: relative;*/
	width: 45%;
	text-align: right;
	/*border: 1px solid;*/
}
.col-2 h1{
	margin: 20px 0;
	font-size: 60px;
	color: #D5C706;
}
.col-2 h4 {
	margin: 5px;
}
p {
	margin-bottom: 20px;
	transition: 0.5s transform;
}
form {
	display: inline-block;
	margin-top: 0px;
	/*border: 1px solid;*/
}
form input {
	width: 100%;
	height: 50px;
	border: 1px solid white;
	background: none;
	margin: 10px 0;
	color: #999;
	padding: 5px 5px;
	outline: none;
}
textarea {
	width: 100%;
	height: 200px;
	padding: 5px 5px;
	background: none;
	outline: none;
	border: 1px solid white;
	color: #999;
	margin-top: 5px;
}
input[type=submit] {
	border-radius: 30px;
	width: 100%;
	height: 40px;
	background:  #fb3659;
	color: #ffffff;
	float: left;
	border: none;
	outline: none;
	cursor: pointer;
	margin-top: 15px;
}
button:hover {
	background: linear-gradient(to right, #fff,#33F771);
	color:#1f1f1f;
}
.rectangle {
	width:100%;
	height: 50px;
	background: #EAF733;
	margin: 10px 0;
}
a {
	text-decoration: none;
	color: white;
}
p:hover {
	transform: translateX(-10px);
}
a:hover {
	color: blue;
}
.addr {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
}
.addr input {
	width: 45%;
}
.fa-check-square-o, .fa-credit-card-alt {
	position: relative;
	border-radius:50%;
	background: #57c8ff;
	padding: 20px 20px;
	text-align: center;
	margin-left: 180px;
}
.fa-ship {
	position: relative;
	border-radius:50%;
	background: #fb3659;
	padding: 20px 20px;
	text-align: center;
	margin-left: 200px;
}
.logo {
	display: flex;
	margin: auto;
}
.fa-ship::after {
  content: "";
  height: 3px;
  width: 201px;
  left: 62px;
  top: 50%;
  transform: translateY(-50%);
  position: absolute;
  background: white;
  bottom: 0px;
  border-radius: 10px;
}
.fa-check-square-o::after {
  content: "";
  height: 3px;
  width: 201px;
  left: 58px;
  top: 50%;
  transform: translateY(-50%);
  position: absolute;
  background: white;
  bottom: 0px;
  border-radius: 10px;
}
input[type=text]:focus{
  background: white;
  color: black;
  outline: orange 3px solid;
}
input[type=tel]:focus{
  background: white;
  color: black;
  outline: orange 3px solid;
}
input[type=email]:focus{
  background: white;
  color: black;
  outline: orange 3px solid;
}
input[type=date]:focus{
  background: white;
  color: black;
  outline: orange 3px solid;
}
input[type=number]:focus{
  background: white;
  color: black;
  outline: orange 3px solid;
}
textarea:focus{
  background: white;
  color: black;
  outline: orange 3px solid;
}
.check-box {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;

}
.check-box input[type=checkbox] {
	width: 8%;
}