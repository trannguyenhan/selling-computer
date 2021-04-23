<?php
header("content-type: text/css");
?>
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
ul {
  list-style: none;
}
sup {
  color: red;
  font-weight: 500;
}
body {
  font-family: 'Roboto',sans-serif;
  font-size: 16px;
  line-height: 1.6;
}
.clearfix {
  zoom: 1;
}
.clearfix:after {
  clear: both;
  content: ".";
  display: block;
  height: 0;
  line-height: 0;
  visibility: hidden;
}
/*layout*/
header {
  background: radial-gradient(white, pink);
}
.container {
  max-width:  1200px;
  padding: 20px auto;
  margin: 0px auto;
  /*border: 1px solid;*/
}
.nav_bar {
  display: flex;
  align-items: center;
  padding: 20px;
}
nav {
  flex:1;
  text-align: right;
}
nav li{
  display: inline-block;
  margin-right: 20px;
}
nav li a{
  text-decoration: none;
  color: red;
  transition: all 0.5s;
}
nav li a:hover {
  color: blue;
}
nav li span {
  color: blue;
}
.row {
  display: flex;
  flex-wrap: wrap;
}
header .row {
  margin-top: 70px;
}
.col-2 {
  flex-basis:50%;
}
.col-2 img {
  width: 100%;
}
.col-2 h1 {
  font-size: 60px;
  color: #1f1f1f;
  line-height: 1.2;
  margin-top: 20px;
}
.col-2 p {
  font-size: 20px;
  margin-top: 30px;
  color: #858585;
}
.btn {
  background: orange;
  color: white;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 30px;
  display: inline-block;
  margin-top: 20px;
  text-decoration: none;
}
.btn:hover {
  background: red;
}
.collection {
  margin-top: 70px;
}
.title {
  font-size: 20px;
  margin: 50px auto;
  text-align: center;
  font-weight: 500;
  color: orange;
  position: relative;
}
.title:after {
  content: "";
  height: 3px;
  width: 100px;
  left: 50%;
  transform: translateX(-50%);
  position: absolute;
  background: green;
  bottom: 0px;
  border-radius: 10px;
}
footer {
  margin-top: 70px;
  text-decoration: none;
  font-size: 14px;
  line-height: 1.5;
  background: #1f1f1f;
  color: #8a8a8a;
  text-align: center;
  padding: 10px 10px;
}
.footer-col-1 {
  width: 20%;
}
.footer-col-2 {
  width: 15%;
}
.footer-col-3 {
  width: 25%;
}
.footer-col-4 {
  width: 15%;
  text-align: left;
  padding-left: 50px;
}
.footer-col-5 {
  width: 25%;
  position: relative;
  display: inline-block;
}
footer h3 {
  color: white;
  margin-bottom: 20px;
  margin-top: 10px;
}
.footer-col-5 img {
  width: 125px;
  cursor: pointer;
  border-radius: 5px;
}
.first_img {
      position:absolute;
      transition: 0.5s all;
}
.second_img {
      position:absolute;
      z-index: 0;
}
.first-img:hover {
     opacity: 0;
}
footer p {
  margin: 5px;
}
hr {
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
}
.footer-col-3 img {
  margin: 60px auto 0;
}
footer a{
  text-decoration: none;
  color: #8a8a8a;
}
footer ul li {
  transition: 0.5s transform;
}
footer ul li:hover {
  transform: translateX(10px);
}
footer a:hover {
  color: white;
}
/*left-sidebar*/
.left-sidebar {
  position: relative;
  flex-basis: 20%;
}
.sidenav {
  min-height: 300px;
  width: 250px;
  position: relative;
  z-index: 1;
  top: 160px;
  left: 20px;
  background: #111;
  overflow-x: hidden;
  padding-top: 20px;
}
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  display: block;
  font-size: 20px;
  color: #818181;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  border: none;
  background: none;
  transition: all 1s ease;
}
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
.active {
  background-color: green;
  color: white;
}
.sidenav span {
  float: right;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}
.fa-plus{
  float: right;
  padding-right: 8px;
}
.list-group {
  width: 250px;
  margin-left: 20px;
  margin-top: 200px;
}
<!-- .slidecontainer {
  width: 250px;
  margin-left: 20px;
  margin-top: 200px;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
} -->
/*all-product*/
.all-product {
  flex-basis: 80%;
}
.col-4 {
  width: 25%;
  padding: 10px;
  float: left;
  margin: 0px;
  <!-- border: 1px solid; -->
}
.col-4 img {
  width: 100%;
  height: 300px;
}
.product-grid {
  position: relative;
}
.product-grid .product-image {
  position: relative;
  overflow: hidden;
}
.product-grid .product-image:after{
  content: "";
  background: rgba(0,0,0,0.3);
  width: 100%;
  height: 98%;
  opacity: 0;
  position: absolute;
  top:0;
  left:0;
  z-index: 1;
  transition: all linear 0.5s;
}
.product-grid:hover .product-image:after {
  opacity: 1;
}
.product-image .product-trend-label {
  content: "";
  color: white;
  background: orange;
  font-size: 12px;
  line-height: 26px;
  text-align: center;
  font-weight: 700;
  text-transform: uppercase;
  padding: 0 10px;
  top: 12px;
  left: 12px;
  z-index: 3;
  position: absolute;
}
.product-image .product-discount-label {
  content: "";
  color: white;
  background: red;
  font-size: 12px;
  line-height: 26px;
  text-align: center;
  font-weight: 700;
  text-transform: uppercase;
  padding: 0 10px;
  top: 12px;
  right: 12px;
  z-index: 3;
  position: absolute;
  border-radius: 5px;
}
.product-grid .social {
  transform: translateY(-50%);
  position: absolute;
  top: 50%;
  left: 10px;
  z-index: 4;
}
.product-grid .social li {
  margin: 0 0 12px;
  opacity: 0;
  transform: translateX(-60px);
  transition: transform 0.5s ease-out 0s;
}
.product-grid:hover .social li {
  opacity: 1;
  transform: translateX(0);
}
.product-grid .social li a {
  color: white;
  font-size: 22px;
  transition: all 0.5s;
}
.next-pages {
  margin-left: 50px;
  margin-top: 30px;
}
.next-pages ul li {
  padding: 10px 20px;
  border-radius: 5px;
  background: pink;
  display: inline-block;
  margin: 0 5px;
}
.next-pages ul li:hover {
  background: red;
}
.next-pages ul li a {
  text-decoration: none;
  color: white;
}