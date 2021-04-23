<?php
header("content-type: text/css");
?>
.small-container {
	max-width: 1080px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
	/*border: 1px solid black;*/
}
.cart-page {
	margin: 80px auto;
}
table {
	width: 100%;
	border-collapse: collapse;
}
.cart-info {
	display: flex;
	flex-wrap: wrap;
}
.btn {
  background: orange;
  color: white;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 30px;
  display: inline-block;
  margin-top: 20px;
  margin-left: 10px; 
  text-decoration: none;
  width : 150px;
}
th {
	text-align: left;
	padding: 5px;
	color: white;
	background-color: #ff523b;
	font-weight: normal;
}
td {
	padding: 10px 50px;
}
td input {
	width :40px;
	height: 30px;
	padding: 5px;
}
td a {
	color: #ff523b;
	font-size: 12px;
}
td img {
	width: 80px;
	height: 80px;
	margin-right: 10px;
}
.total-price {
	display: flex;
	justify-content: flex-end;
}
.total-price table {
	border-top: 3px solid #ff523b;
	width: 100%;
	max-width: 400px;
}
td:last-child {
	text-align: right;
}
th:last-child {
	text-align: right;
}