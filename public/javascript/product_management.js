

// update sp
function check_img(s){
imgs=s.split(".");
if(imgs[1]=='jpg' || imgs[1]=='png' || imgs[1]=='gif'|| imgs[1]=='tiff' || imgs[1]=='bmp'){
return true;
}
return false;
}
function update(){
var type = document.getElementById('type-search').value;
var id = document.getElementById('edit_id').value;
var model =document.getElementById('edit_model').value;
var img =document.getElementById('edit_img2').value;
var price =document.getElementById('edit_price').value;
var w =document.getElementById('edit_w').value;
var color =document.getElementById('edit_color').value;
var num =document.getElementById('edit_num').value;
var supplier =document.getElementById('edit_supplier').value;
var cpu =document.getElementById('edit_cpu').value;
var ram =document.getElementById('edit_ram').value;
var storage =document.getElementById('edit_storage').value;
var screen =document.getElementById('edit_screen').value;
var card =document.getElementById('edit_card').value;
var mc =document.getElementById('edit_mc').value;
var os =document.getElementById('edit_os').value;
var bat =document.getElementById('edit_bat').value;
var dep =document.getElementById('edit_dep').value;
var cas =document.getElementById('edit_case').value;
var sc =document.getElementById('edit_sc').value;
var cp =document.getElementById('edit_cp').value;
var led =document.getElementById('edit_led').value;
var size =document.getElementById('edit_size').value;
var str="";
if(id<=0){
str+="productID must be greater than 0\n";
}
if(price<=0){
str+="price must be greater than 0\n";
}
if(w<=0){
str+="weight must be greater than 0\n";
}
if(num<0){
str+="(numOfProduct must be greater than 0 or equal to 0\n";
}
if(bat<=0 && type==1){
str+="battery must be greater than 0\n";
}
if(storage<=0  &&( type==1  || type==2)){
str+="storage must be greater than 0\n";
}
if(sc<=0  && type==3){
str+="StandardConnection must be greater than 0\n";
}
if((!(led==0 || led ==1))  && type==3){
str+="Led must be equal to 0(not led) or equal to 1(led)\n";
}
if(str!=""){
alert(str);
return;
}
var img_text;
if(img==""){
img_text=document.getElementById('edit_img1').src;
}else{
var imgs = img.split("\\");
img_text='public/images/products/' +imgs[2];
if(check_img(img_text)){
upload_img('edit_img2');
}else{
alert("Wrong image format!");
return;
}
}
var str1= "type="+type+"&id="+id+"&model="+model+"&img="+img_text+"&price="+price+"&w="+w+
"&color="+color+"&num="+num+"&supplier="+supplier+"&cpu="+cpu+"&ram="+ram+"&storage="+storage+
"&screen="+screen+"&card="+card+"&mc="+mc+"&os="+os+"&bat="+bat+"&dep="+dep+"&case="+cas+"&sc="+sc+
"&cp="+cp+"&led="+led+"&size="+size;
var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
alert(this.responseText);
}
};
xhttp.open("POST", "http://localhost/selling-computer/library/admin/updateProduct.php", false);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(str1);
var id = document.getElementById('edit_id').style.border='none';
var model =document.getElementById('edit_model').style.border='none';
var img =document.getElementById('edit_img2').style.border='none';
var price =document.getElementById('edit_price').style.border='none';
var w =document.getElementById('edit_w').style.border='none';
var color =document.getElementById('edit_color').style.border='none';
var num =document.getElementById('edit_num').style.border='none';
var supplier =document.getElementById('edit_supplier').style.border='none';
var cpu =document.getElementById('edit_cpu').style.border='none';
var ram =document.getElementById('edit_ram').style.border='none';
var storage =document.getElementById('edit_storage').style.border='none';
var screen =document.getElementById('edit_screen').style.border='none';
var card =document.getElementById('edit_card').style.border='none';
var mc =document.getElementById('edit_mc').style.border='none';
var os =document.getElementById('edit_os').style.border='none';
var bat =document.getElementById('edit_bat').style.border='none';
var dep =document.getElementById('edit_dep').style.border='none';
var cas =document.getElementById('edit_case').style.boder='none';
var sc =document.getElementById('edit_sc').style.border='none';
var cp =document.getElementById('edit_cp').style.border='none';
var led =document.getElementById('edit_led').style.border='none';
var size =document.getElementById('edit_size').style.border='none';
sc_ct_sp(document.getElementById('edit_id').value);
}
// cho phép sửa trong chi tiết sp
function edit(x){
document.getElementById(x).removeAttribute("disabled");
document.getElementById(x).style.border='red solid 3px';
}
// laptop
function sc_laptop(){
var div_main = document.getElementById('main');
var div_add_laptop=document.getElementById('add_laptop');
div_main.style.display='none';
div_add_laptop.style.display='inherit';
}
//pc
function sc_pc(){
var div_main = document.getElementById('main');
var div_add_pc=document.getElementById('add_pc');
div_main.style.display='none';
div_add_pc.style.display='inherit';
}
// mouse
function sc_mouse(){
var div_main = document.getElementById('main');
var div_add_mouse=document.getElementById('add_mouse');
div_main.style.display='none';
div_add_mouse.style.display='inherit';
}
// quay lại main
function back_main(){
var div_main = document.getElementById('main');
var div_add_laptop=document.getElementById('add_laptop');
var div_add_pc=document.getElementById('add_pc');
var div_add_mouse=document.getElementById('add_mouse');
var ql_sp=document.getElementById('ql_sp');
div_main.style.display='flex';
div_add_laptop.style.display='none';
div_add_pc.style.display='none';
div_add_mouse.style.display='none';
ql_sp.style.display='none';
}
// quản lý laptop
function ql_laptop(){
var div_main = document.getElementById('main');
var ql_sp=document.getElementById('ql_sp');
var type=document.getElementById('type-search');
var text=document.getElementById('ql_sp_text');
type.value='1';
text.innerHTML="LAPTOP MANAGEMENT";
div_main.style.display='none';
ql_sp.style.display='inherit';
get_data_search();
}
// quản lý pc
function ql_pc(){
var div_main = document.getElementById('main');
var ql_sp=document.getElementById('ql_sp');
var type=document.getElementById('type-search');
var text=document.getElementById('ql_sp_text');
type.value='2';
text.innerHTML="PC MANAGEMENT";
div_main.style.display='none';
ql_sp.style.display='inherit';
get_data_search();
}
// quản lý chuột
function ql_mouse(){
var div_main = document.getElementById('main');
var ql_sp=document.getElementById('ql_sp');
var type=document.getElementById('type-search');
var text=document.getElementById('ql_sp_text');
type.value='3';
text.innerHTML="COMPUTER MOUSE MANAGEMENT";
div_main.style.display='none';
ql_sp.style.display='inherit';
get_data_search();
}
// post data
function funcPOST(url, cFunction) {
var xhttp;
var str=cFunction();
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
//document.getElementById("rs").innerHTML=this.responseText;
alert(this.responseText);
if(this.responseText=="Add success!") {
remove_add_laptop();
remove_add_pc();
remove_add_mouse();
}
}
};
xhttp.open("POST", url, true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(str);
}
function get_data_search(){
var type=document.getElementById('type-search').value;
var id = document.getElementById('id-search').value;
var model = document.getElementById('model-search').value;
var sup = document.getElementById('sup-search').value;
var str = "?type="+type+"&id="+id+"&model="+model+"&sup="+sup;
var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById('display_s').innerHTML=this.responseText;
}
};
xhttp.open("GET", "http://localhost/selling-computer/library/admin/getDataSearch.php"+str, false);
xhttp.send();
}
// xóa sp theo id
function delete_by_id(x){
var id = x.value;
if(confirm("Are you sure you want to delete?")==true){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
alert(this.responseText);
var type=document.getElementById('type-search').value;
if(value=='1'){
ql_laptop();
}
if(value=='2'){
ql_pc();
}
if(value=='3'){
ql_mouse();
}
}
};
xhttp.open("GET","http://localhost/selling-computer/library/admin/deleteProduct.php?id="+id, false);
xhttp.send();
}
get_data_search();
}
// chi tiết sp
function sc_ct_sp(x){
var id = x;
document.getElementById('ql_sp').style.display='none';
document.getElementById('ct_sp').style.display='inherit';
var type = document.getElementById('type-search').value;
if(type=='1'){
document.getElementById('edit_cpu').style.display='flex';
document.getElementById('edit_ram').style.display='flex';
document.getElementById('edit_storage').style.display='flex';
document.getElementById('edit_screen').style.display='flex';
document.getElementById('edit_card').style.display='flex';
document.getElementById('edit_mc').style.display='flex';
document.getElementById('edit_os').style.display='flex';
document.getElementById('edit_bat').style.display='flex';
document.getElementById('edit_case').style.display='none';
document.getElementById('edit_sc').style.display='none';
document.getElementById('edit_cp').style.display='none';
document.getElementById('edit_led').style.display='none';
document.getElementById('edit_size').style.display='none';
}
if(type=='2'){
document.getElementById('edit_cpu').style.display='flex';
document.getElementById('edit_ram').style.display='flex';
document.getElementById('edit_storage').style.display='flex';
document.getElementById('edit_screen').style.display='flex';
document.getElementById('edit_card').style.display='flex';
document.getElementById('edit_mc').style.display='flex';
document.getElementById('edit_os').style.display='flex';
document.getElementById('edit_bat').style.display='none';
document.getElementById('edit_case').style.display='flex';
document.getElementById('edit_sc').style.display='none';
document.getElementById('edit_cp').style.display='none';
document.getElementById('edit_led').style.display='none';
document.getElementById('edit_size').style.display='none';
}
if(type=='3'){
document.getElementById('edit_cpu').style.display='none';
document.getElementById('edit_ram').style.display='none';
document.getElementById('edit_storage').style.display='none';
document.getElementById('edit_screen').style.display='none';
document.getElementById('edit_card').style.display='none';
document.getElementById('edit_mc').style.display='none';
document.getElementById('edit_os').style.display='none';
document.getElementById('edit_bat').style.display='none';
document.getElementById('edit_case').style.display='none';
document.getElementById('edit_sc').style.display='flex';
document.getElementById('edit_cp').style.display='flex';
document.getElementById('edit_led').style.display='flex';
document.getElementById('edit_size').style.display='flex';
}
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var s = this.responseText.split("&");
document.getElementById('edit_id').value=s[0];
document.getElementById('edit_model').value=s[1];
document.getElementById('edit_img1').src=s[2];
document.getElementById('edit_img1').value=s[2];
document.getElementById('edit_price').value=s[3];
document.getElementById('edit_w').value=s[4];
document.getElementById('edit_color').value=s[5];
document.getElementById('edit_num').value=s[6];
document.getElementById('edit_supplier').value=s[7];
document.getElementById('edit_cpu').value=s[8];
document.getElementById('edit_ram').value=s[9];
document.getElementById('edit_storage').value=s[10];
document.getElementById('edit_screen').value=s[11];
document.getElementById('edit_card').value=s[12];
document.getElementById('edit_mc').value=s[13];
document.getElementById('edit_os').value=s[14];
document.getElementById('edit_bat').value=s[15];
document.getElementById('edit_dep').value=s[16];
document.getElementById('edit_case').value=s[17];
document.getElementById('edit_sc').value=s[18];
document.getElementById('edit_cp').value=s[19];
document.getElementById('edit_led').value=s[20];
document.getElementById('edit_size').value=s[21];
}
};
xhttp.open("GET","http://localhost/selling-computer/library/admin/getProductById.php?id="+id+'&type='+type, true);
xhttp.send();
}
// quay lại trang quản lý sp
function back_qlsp(){
document.getElementById('ql_sp').style.display='inherit';
document.getElementById('ct_sp').style.display='none';
var id = document.getElementById('edit_id').style.border='none';
var model =document.getElementById('edit_model').style.border='none';
var img =document.getElementById('edit_img2').style.border='none';
var price =document.getElementById('edit_price').style.border='none';
var w =document.getElementById('edit_w').style.border='none';
var color =document.getElementById('edit_color').style.border='none';
var num =document.getElementById('edit_num').style.border='none';
var supplier =document.getElementById('edit_supplier').style.border='none';
var cpu =document.getElementById('edit_cpu').style.border='none';
var ram =document.getElementById('edit_ram').style.border='none';
var storage =document.getElementById('edit_storage').style.border='none';
var screen =document.getElementById('edit_screen').style.border='none';
var card =document.getElementById('edit_card').style.border='none';
var mc =document.getElementById('edit_mc').style.border='none';
var os =document.getElementById('edit_os').style.border='none';
var bat =document.getElementById('edit_bat').style.border='none';
var dep =document.getElementById('edit_dep').style.border='none';
var cas =document.getElementById('edit_case').style.border='none';
var sc =document.getElementById('edit_sc').style.border='none';
var cp =document.getElementById('edit_cp').style.border='none';
var led =document.getElementById('edit_led').style.border='none';
var size =document.getElementById('edit_size').style.border='none';
get_data_search();
}
// ADD LAPTOP
function get_value_add_laptop() {
var productID=document.getElementById('lt-id').value;
var model=document.getElementById('lt-model').value;
var price=document.getElementById('lt-price').value;
var weight =document.getElementById('lt-w').value;
var color =document.getElementById('lt-color').value;
var numOfProduct  =document.getElementById('lt-num').value;
var supplier  =document.getElementById('lt-sup').value;
var mainC =document.getElementById('lt-mainC').value;
var os =document.getElementById('lt-os').value;
var bat =document.getElementById('lt-bat').value;
var sc =document.getElementById('lt-sc').value;
var cpu =document.getElementById('lt-cpu').value;
var ram =document.getElementById('lt-ram').value;
var storage =document.getElementById('lt-storage').value;
var card =document.getElementById('lt-card').value;
var dep =document.getElementById('lt-dep').value;
var img =document.getElementById('lt-img').value;
var imgs = img.split("\\");
var img_text=imgs[2];
var str="productID="+productID+
"&model="+model+
"&price="+price+
"&weight="+weight+
"&color="+color+
"&numberOfProduct="+numOfProduct+
"&supplier="+supplier+
"&mainConnection="+mainC+
"&os="+os+
"&battery="+bat+
"&screen="+sc+
"&cpu="+cpu+
"&ram="+ram+
"&storage="+storage+
"&card="+card+
"&depscription="+dep+
"&img="+img_text;
return str;
}
function add_laptop(id_element) {
str = check_add_laptop();
if(str!=""){
alert(str);
return;
}
var img =document.getElementById('lt-img').value;
var imgs = img.split("\\");
var img_text=imgs[2];
if(check_img(img_text)){
upload_img(id_element);
}else{
alert("Wrong image format!");
return;
}

funcPOST("http://localhost/selling-computer/library/admin/addLaptop.php", get_value_add_laptop);
}
function check_add_laptop(){
var productID=document.getElementById('lt-id').value;
var model=document.getElementById('lt-model').value;
var price=document.getElementById('lt-price').value;
var weight =document.getElementById('lt-w').value;
var color =document.getElementById('lt-color').value;
var numOfProduct  =document.getElementById('lt-num').value;
var supplier  =document.getElementById('lt-sup').value;
var mainC =document.getElementById('lt-mainC').value;
var os =document.getElementById('lt-os').value;
var bat =document.getElementById('lt-bat').value;
var sc =document.getElementById('lt-sc').value;
var cpu =document.getElementById('lt-cpu').value;
var ram =document.getElementById('lt-ram').value;
var storage =document.getElementById('lt-storage').value;
var card =document.getElementById('lt-card').value;
var dep =document.getElementById('lt-dep').value;
var img =document.getElementById('lt-img').value;
var str="";
if(productID=="" || model=="" || price=="" || weight=="" || color=="" || numOfProduct=="" || supplier=="" ||
mainC=="" || os=="" || bat=="" || sc=="" || cpu=="" || ram=="" || storage=="" || card==""
|| dep=="" || img ==""){
str+= "Fields cannot be null!";
}else{
if(productID<=0){
str+="productID must be greater than 0\n";
}
if(price<=0){
str+="price must be greater than 0\n";
}
if(weight<=0){
str+="weight must be greater than 0\n";
}
if(numOfProduct<0){
str+="(numOfProduct must be greater than 0 or equal to 0\n";
}
if(bat<=0){
str+="battery must be greater than 0\n";
}
if(storage<=0){
str+="storage must be greater than 0\n";
}
}
return str;
}
function remove_add_laptop(){
document.getElementById('lt-id').value="";
document.getElementById('lt-model').value="";
document.getElementById('lt-price').value="";
document.getElementById('lt-w').value="";
document.getElementById('lt-color').value="";
document.getElementById('lt-num').value="";
document.getElementById('lt-sup').value="";
document.getElementById('lt-mainC').value="";
document.getElementById('lt-os').value="";
document.getElementById('lt-bat').value="";
document.getElementById('lt-sc').value="";
document.getElementById('lt-cpu').value="";
document.getElementById('lt-ram').value="";
document.getElementById('lt-storage').value="";
document.getElementById('lt-card').value="";
document.getElementById('lt-dep').value="";
document.getElementById('lt-img').value="";
}
// ADD PC
function get_value_add_pc() {
var productID=document.getElementById('pc-id').value;
var model=document.getElementById('pc-model').value;
var price=document.getElementById('pc-price').value;
var weight =document.getElementById('pc-w').value;
var color =document.getElementById('pc-color').value;
var numOfProduct  =document.getElementById('pc-num').value;
var supplier  =document.getElementById('pc-sup').value;
var mainC =document.getElementById('pc-mainC').value;
var os =document.getElementById('pc-os').value;
var cas=document.getElementById('pc-case').value;
var sc =document.getElementById('pc-sc').value;
var cpu =document.getElementById('pc-cpu').value;
var ram =document.getElementById('pc-ram').value;
var storage =document.getElementById('pc-storage').value;
var card =document.getElementById('pc-card').value;
var dep =document.getElementById('pc-dep').value;
var img =document.getElementById('pc-img').value;
var imgs = img.split("\\");
var img_text=imgs[2];
var str="productID="+productID+
"&model="+model+
"&price="+price+
"&weight="+weight+
"&color="+color+
"&numberOfProduct="+numOfProduct+
"&supplier="+supplier+
"&mainConnection="+mainC+
"&os="+os+
"&case="+cas+
"&screen="+sc+
"&cpu="+cpu+
"&ram="+ram+
"&storage="+storage+
"&card="+card+
"&depscription="+dep+
"&img="+img_text;
return str;
}
function add_pc(id_element) {
str = check_add_pc();
if(str!=""){
alert(str);
return;
}
var img =document.getElementById('pc-img').value;
var imgs = img.split("\\");
var img_text=imgs[2];
if(check_img(img_text)){
upload_img(id_element);
}else{
alert("Wrong image format!");
return;
}
funcPOST("http://localhost/selling-computer/library/admin/addPC.php", get_value_add_pc);
}
function check_add_pc(){
var productID=document.getElementById('pc-id').value;
var model=document.getElementById('pc-model').value;
var price=document.getElementById('pc-price').value;
var weight =document.getElementById('pc-w').value;
var color =document.getElementById('pc-color').value;
var numOfProduct  =document.getElementById('pc-num').value;
var supplier  =document.getElementById('pc-sup').value;
var mainC =document.getElementById('pc-mainC').value;
var os =document.getElementById('pc-os').value;
var cas=document.getElementById('pc-case').value;
var sc =document.getElementById('pc-sc').value;
var cpu =document.getElementById('pc-cpu').value;
var ram =document.getElementById('pc-ram').value;
var storage =document.getElementById('pc-storage').value;
var card =document.getElementById('pc-card').value;
var dep =document.getElementById('pc-dep').value;
var img =document.getElementById('pc-img').value;
var str="";
if(productID=="" || model=="" || price=="" || weight=="" || color=="" || numOfProduct=="" || supplier=="" ||
mainC=="" || os=="" || cas=="" || sc=="" || cpu=="" || ram=="" || storage=="" || card==""
|| dep=="" || img ==""){
str+= "Fields cannot be null!";
}else{
if(productID<=0){
str+="productID must be greater than 0\n";
}
if(price<=0){
str+="price must be greater than 0\n";
}
if(weight<=0){
str+="weight must be greater than 0\n";
}
if(numOfProduct<0){
str+="(numOfProduct must be greater than 0 or equal to 0\n";
}
if(storage<=0){
str+="storage must be greater than 0\n";
}
}
return str;
}
function remove_add_pc(){
document.getElementById('pc-id').value="";
document.getElementById('pc-model').value="";
document.getElementById('pc-price').value="";
document.getElementById('pc-w').value="";
document.getElementById('pc-color').value="";
document.getElementById('pc-num').value="";
document.getElementById('pc-sup').value="";
document.getElementById('pc-mainC').value="";
document.getElementById('pc-os').value="";
document.getElementById('pc-case').value="";
document.getElementById('pc-sc').value="";
document.getElementById('pc-cpu').value="";
document.getElementById('pc-ram').value="";
document.getElementById('pc-storage').value="";
document.getElementById('pc-card').value="";
document.getElementById('pc-dep').value="";
document.getElementById('pc-img').value="";
}
// ADD MOUSE
function get_value_add_mouse() {
var productID=document.getElementById('m-id').value;
var model=document.getElementById('m-model').value;
var price=document.getElementById('m-price').value;
var weight =document.getElementById('m-w').value;
var color =document.getElementById('m-color').value;
var numOfProduct  =document.getElementById('m-num').value;
var supplier  =document.getElementById('m-sup').value;
var sc =document.getElementById('m-sc').value;
var cp =document.getElementById('m-cp').value;
var isLed =document.getElementById('m-isLed').value;
var size =document.getElementById('m-size').value;
var dep =document.getElementById('m-dep').value;
var img =document.getElementById('m-img').value;
var imgs = img.split("\\");
var img_text=imgs[2];
var str="productID="+productID+
"&model="+model+
"&price="+price+
"&weight="+weight+
"&color="+color+
"&numberOfProduct="+numOfProduct+
"&supplier="+supplier+
"&standardConnection="+sc+
"&connectionProtocal="+cp+
"&isLed="+isLed+
"&size="+size+
"&depscription="+dep+
"&img="+img_text;
return str;
}
function add_mouse(id_element) {
str = check_add_mouse();
if(str!=""){
alert(str);
return;
}
var img =document.getElementById('m-img').value;
var imgs = img.split("\\");
var img_text=imgs[2];
if(check_img(img_text)){
upload_img(id_element);
}else{
alert("Wrong image format!");
return;
}
funcPOST("http://localhost/selling-computer/library/admin/addMouse.php", get_value_add_mouse);
}
function check_add_mouse(){
var productID=document.getElementById('m-id').value;
var model=document.getElementById('m-model').value;
var price=document.getElementById('m-price').value;
var weight =document.getElementById('m-w').value;
var color =document.getElementById('m-color').value;
var numOfProduct  =document.getElementById('m-num').value;
var supplier  =document.getElementById('m-sup').value;
var sc =document.getElementById('m-sc').value;
var cp =document.getElementById('m-cp').value;
var isLed =document.getElementById('m-isLed').value;
var size =document.getElementById('m-size').value;
var dep =document.getElementById('m-dep').value;
var img =document.getElementById('m-img').value;
var str="";
if(productID=="" || model=="" || price=="" || weight=="" || color=="" || numOfProduct=="" || supplier==""
|| sc==""|| cp=="" || isLed=="" || size==""
|| dep=="" || img ==""){
str+= "Fields cannot be null!";
}else{
if(productID<=0){
str+="productID must be greater than 0\n";
}
if(price<=0){
str+="price must be greater than 0\n";
}
if(weight<=0){
str+="weight must be greater than 0\n";
}
if(numOfProduct<0){
str+="(numOfProduct must be greater than 0 or equal to 0\n";
}
if(sc<=0){
str+="StandardConnection must be greater than 0\n";
}
if(!(isLed==0 || isLed ==1)){
str+="isLed must be equal to 0(not led) or equal to 1(led)\n";
}
}
return str;
}
function remove_add_mouse(){
document.getElementById('m-id').value="";
document.getElementById('m-model').value="";
document.getElementById('m-price').value="";
document.getElementById('m-w').value="";
document.getElementById('m-color').value="";
document.getElementById('m-num').value="";
document.getElementById('m-sup').value="";
document.getElementById('m-sc').value="";
document.getElementById('m-cp').value="";
document.getElementById('m-isLed').value="";
document.getElementById('m-size').value="";
document.getElementById('m-dep').value="";
document.getElementById('m-img').value="";
}
// UPLOAD IMAGE
function upload_img(id_element){
            let photo = document.getElementById(id_element).files[0];
            let formData = new FormData();
            formData.append("file", photo);
            fetch('http://localhost/selling-computer/library/admin/uploadImg.php', {method: "POST", body: formData});
        }