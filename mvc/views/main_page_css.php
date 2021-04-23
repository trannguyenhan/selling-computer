 /* Reset */
 <?php header("content-type: text/css")?>
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
ul {
  list-style: none;
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
  justify-content: space-around;
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
  font-size: 40px;
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
.collection img {
  width: 100%;
}
.small-container {
  max-width: 1000px;
  margin: auto;
}
.col-9 {
  flex-basis: 10%;
  margin: auto;
  text-align: center;
}
.col-9 img {
  width: 100%;
  border-radius: 50%;
  width: 80px;
  height: 80px;
  margin: auto;
  transition: 0.5s transform;
}
.col-9 img:hover {
  transform: scale(1.5,1.5);
}
.col-9 h3 {
  font-size: 20px;
  line-height: 1.0;
}
.col-3 {
  flex-basis: 30%;
  padding: 10px 10px;
  justify-content: space-between;
  transition: 0.5s transform;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.featured_products .row {
  justify-content: space-around;
}
.col-3 img {
  width: 100%;
}
.col-3:hover {
  transform: translateY(-20px);
}
.special_offer {
  margin-top: 80px;
}
.advertising img{
  width: 100%;
}
.col-x {
  flex-basis: 12%;
}
.col-x img {
  width: 100%;
  height: 80%;
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