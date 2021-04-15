<?php
header("content-type: text/css");
?>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	background: #fff;
	color: white;
	background-repeat: no-repeat;
	background-image: url("https://www.idfreshfood.com/ae-en/wp-content/uploads/2017/09/contact_us_2.jpg");
}
.container {
	width: 1000px;
	height: 540px;
	margin: 100px auto;
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
	width: 40%;
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
	height: 100px;
	padding: 5px 5px;
	background: none;
	outline: none;
	border: 1px solid white;
	color: #999;
	margin-top: 5px;
}
button {
	border-radius: 30px;
	width: 100px;
	height: 40px;
	background: linear-gradient(to right, #fff, #EAF733);
	color: #1f1f1f;
	float: left;
	border: none;
	outline: none;
	cursor: pointer;
}
button:hover {
	background: linear-gradient(to right, #fff,#33F771);
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