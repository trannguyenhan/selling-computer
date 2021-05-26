<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Management | MTHH</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/admin/product_management.css">
        <script src="public/javascript/admin/product_management.js"></script>
    </head>
    <body>
        <div>
            <div style="float: left; width: 20%; height: 150px;">
                <center><img src="images/admin/admin.jpg" alt="" width="50%" height="100%"></center>
            </div>
            <div style="width: 80%; height: 150px;">
                <center><h1 style="color: rgb(50, 158, 98); padding: 20px;">PRODUCT  MANAGEMENT</h1></center>
            </div>
        </div>
        <div id="main" style="display: flex;">
            <div style="background-color: rgb(212, 188, 109);" class="main">
                <center>
                <img src="images/admin/laptop.jpg" alt="" class="img-icon">
                <h1 style="color: white">LAPTOP</h1>
                <div>
                    <button class="btn-icon" onclick="sc_laptop()">Add Laptop</button>
                </div>
                <div>
                    <button class="btn-icon" onclick="ql_laptop()">Laptop Management</button>
                </div>
                </center>
            </div>
            <div style="background-color: rgb(94, 117, 139);" class="main">
                <center>
                <img src="images/admin/pc.jpg" alt="" class="img-icon">
                <h1 style="color: white">PC</h1>
                <div>
                    <button class="btn-icon" onclick="sc_pc()">Add PC</button>
                </div>
                <div>
                    <button class="btn-icon"  onclick="ql_pc()">PC Management</button>
                </div>
                </center>
            </div>
            <div style="background-color: rgb(121, 165, 92);" class="main">
                <center>
                <img src="images/admin/mouse.jpg" alt="" class="img-icon">
                <h1 style="color: white">MOUSE</h1>
                <div>
                    <button class="btn-icon" onclick="sc_mouse()">Add Computer Mouse</button>
                </div>
                <div>
                    <button class="btn-icon" onclick="ql_mouse()">Computer Mouse Management</button>
                </div>
                </center>
            </div>
        </div>
        <!--ADD-LAPTOP-->
        <div id='add_laptop' style=" display: none;">
            <div style="display: flex; background-color: rgb(97, 182, 133); border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <div style="width: 10%;">
                    <center><button class="btn-back" onclick="back_main()">&lt&lt&lt</button></center>
                </div>
                <div  style="width: 80%;">
                    <center><h2 style="color:white;">ADD LAPTOP</h2></center>
                </div>
            </div>
            <div >
                <div id="" class="form-add" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; margin-bottom: 50px;">
                    <div class="form" id="form">
                        <form action="">
                            <div style="float: left; width: 50%;">
                                <p class="form-left p-add">ProductID</p>
                                <input class="form-left" type="number" id="lt-id">
                                <p class="form-left p-add">Model</p>
                                <input class="form-left" type="text" id="lt-model">
                                <p class="form-left p-add" >Price</p>
                                <input class="form-left" type="number" id="lt-price">
                                <p class="form-left">Weight</p>
                                <input class="form-left" type="number" id="lt-w">
                                <p class="form-left" >Color</p>
                                <input class="form-left" type="text" id="lt-color">
                                <p class="form-left">Number Of Product</p>
                                <input class="form-left" type="number" id="lt-num">
                                <p class="form-left">Supplier</p>
                                <input class="form-left" type="text" id="lt-sup">
                                <p class="form-left">MainConnection</p>
                                <input class="form-left" type="text" id="lt-mainC">
                                <p class="form-left">OS</p>
                                <input class="form-left" type="text" id="lt-os">
                                <p class="form-left">Battery</p>
                                <input class="form-left" type="number" id="lt-bat">
                                <p class="form-left">Screen</p>
                                <input class="form-left" type="text" id="lt-sc">
                            </div>
                            <div style="float: left; width: 50%;">
                                <p class="form-left">CPU</p>
                                <input class="form-left" type="text" id="lt-cpu">
                                <p class="form-left">RAM</p>
                                <input class="form-left" type="text" id="lt-ram">
                                <p class="form-left">Storage</p>
                                <input class="form-left" type="number" id="lt-storage">
                                <p class="form-left">Card</p>
                                <input class="form-left" type="text" id="lt-card">
                                <p class="form-left">Image</p>
                                <input style="margin-left: 20px;" type="file" id="lt-img">
                                <p class="form-left">Depscription</p>
                                <textarea cols="70" rows="20" id="lt-dep"></textarea>
                            </div>
                            <!--center><input type="submit" class="submit" value="ADD" onclick="lt_add()"></center>-->
                        </form>
                        <center><button  class="submit" onclick="add_laptop('lt-img')" style="width: 70%;">ADD</button></center>
                    </div>
                </div>
            </div>
        </div>
        <!--ADD-PC-->
        <div id='add_pc' style=" display: none;">
            <div style="display: flex; background-color: rgb(97, 182, 133); border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <div style="width: 10%;">
                    <center><button class="btn-back" onclick="back_main()">&lt&lt&lt</button></center>
                </div>
                <div  style="width: 80%;">
                    <center><h2 style="color:white;">ADD PC</h2></center>
                </div>
            </div>
            <div >
                <div id="" class="form-add" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; margin-bottom: 50px;">
                    <div>
                        <form action="">
                            <div style="float: left; width: 50%;">
                                <p class="form-left">ProductID</p>
                                <input class="form-left" type="number" id="pc-id">
                                <p class="form-left">Model</p>
                                <input class="form-left" type="text" id="pc-model">
                                <p class="form-left" >Price</p>
                                <input class="form-left" type="number" id="pc-price">
                                <p class="form-left">Weight</p>
                                <input class="form-left" type="number" id="pc-w">
                                <p class="form-left" >Color</p>
                                <input class="form-left" type="text" id="pc-color">
                                <p class="form-left">Number Of Product</p>
                                <input class="form-left" type="number" id="pc-num">
                                <p class="form-left">Supplier</p>
                                <input class="form-left" type="text" id="pc-sup">
                                <p class="form-left">MainConnection</p>
                                <input class="form-left" type="text" id="pc-mainC">
                                <p class="form-left">OS</p>
                                <input class="form-left" type="text" id="pc-os">
                                <p class="form-left">Case</p>
                                <input class="form-left" type="text" id="pc-case">
                                <p class="form-left">Screen</p>
                                <input class="form-left" type="text" id="pc-sc">
                            </div>
                            <div style="float: left; width: 50%;">
                                <p class="form-left">CPU</p>
                                <input class="form-left" type="text" id="pc-cpu">
                                <p class="form-left">RAM</p>
                                <input class="form-left" type="text" id="pc-ram">
                                <p class="form-left">Storage</p>
                                <input class="form-left" type="number" id="pc-storage">
                                <p class="form-left">Card</p>
                                <input class="form-left" type="text" id="pc-card">
                                <p class="form-left">Image</p>
                                <input style="margin-left: 20px;" type="file" id="pc-img">
                                <p class="form-left">Depscription</p>
                                <textarea id="pc-dep" cols="70" rows="20"></textarea>
                            </div>
                        </form>
                        <center><button  class="submit" onclick="add_pc('pc-img')" style="width: 70%;">ADD</button></center>
                    </div>
                </div>
            </div>
        </div>
        <!--ADD-MOUSE-->
        <div id='add_mouse' style=" display: none;">
            <div style="display: flex; background-color: rgb(97, 182, 133); border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <div style="width: 10%;">
                    <center><button class="btn-back" onclick="back_main()">&lt&lt&lt</button></center>
                </div>
                <div  style="width: 80%;">
                    <center><h2 style="color:white;">ADD MOUSE</h2></center>
                </div>
            </div>
            <div>
                <div id="" class="form-add" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; margin-bottom: 50px;">
                    <div>
                        <form action="">
                            <div style="float: left; width: 50%;">
                                <p class="form-left">ProductID</p>
                                <input class="form-left" type="number" id="m-id">
                                <p class="form-left">Model</p>
                                <input class="form-left" type="text" id="m-model">
                                <p class="form-left" >Price</p>
                                <input class="form-left" type="number" id="m-price">
                                <p class="form-left">Weight</p>
                                <input class="form-left" type="number" id="m-w">
                                <p class="form-left" >Color</p>
                                <input class="form-left" type="text" id="m-color">
                                <p class="form-left">Number Of Product</p>
                                <input class="form-left" type="number" id="m-num">
                                <p class="form-left">Supplier</p>
                                <input class="form-left" type="text" id="m-sup">
                                <p class="form-left">StandardConnection</p>
                                <input class="form-left" type="number" id="m-sc">
                            </div>
                            <div style="float: left; width: 50%;">
                                <p class="form-left">ConnectionProtocal</p>
                                <input class="form-left" type="text" id="m-cp">
                                <p class="form-left">IsLed</p>
                                <input class="form-left" type="number" id="m-isLed">
                                <p class="form-left">Size</p>
                                <input class="form-left" type="text" id="m-size">
                                <p class="form-left">Image</p>
                                <input style="margin-left: 20px;" type="file" id="m-img">
                                <p class="form-left">Depscription</p>
                                <textarea id="m-dep" cols="70" rows="20"></textarea>
                            </div>
                        </form>
                        <center><button  class="submit" onclick="add_mouse('m-img')" style="width: 70%;">ADD</button></center>
                    </div>
                </div>
            </div>
        </div>
        <!--Tìm kiếm sản phẩm-->
        <div id='ql_sp' style=" display: none;">
            <div style="display: flex; background-color: rgb(97, 182, 133); border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <div style="width: 10%;">
                    <center><button class="btn-back" onclick="back_main()">&lt&lt&lt</button></center>
                </div>
                <div  style="width: 80%;">
                    <center><h2 style="color:white;" id="ql_sp_text"></h2></center>
                </div>
            </div>
            <div class="form-add">
                <form action="">
                    <input type="text" id="type-search" style="display: none;">
                    <div style="float: left; width: 25%;">
                        <p class="form-left">ProductID</p>
                        <input class="form-left" type="text" id="id-search">
                    </div>
                    <div style="float: left; width: 25%;">
                        <p class="form-left">Model</p>
                        <input class="form-left" type="text" id="model-search">
                    </div>
                    <div style="float: left; width: 25%;">
                        <p class="form-left">Supplier</p>
                        <select style="width:70%;" class="form-left" id="sup-search">
                            <option></option>
                            <option>Dell</option>
                            <option>Hp</option>
                            <option>Lenovo</option>
                            <option>Asus</option>
                            <option>MSI</option>
                            <option>Acer</option>
                        </select>
                    </div>
                    <div style="float: left; width: 10%;">
                        <button  class="submit" onclick="get_data_search()" style="width: 70%;" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <div class="" id="display_s">
                <!--div class="product" style="">
                <div>
                    <img src="images/admin/laptop.jpg" alt="" width="200px;" height="200px">
                    <p style="margin-left: 5px;">LAPTOP HP ZBOOK G2</p>
                    <p style="margin-top: 0px; margin-right: 0px;">15.000.000Đ</p>
                </div>
                <div>
                    <button class="btn-ql-xx">Xem</button>
                    <button class="btn-ql-xx">Xóa</button>
                </div>
            </div-->
        </div>
    </div>
    <!--CHI TIẾT SẢN PHẨM -->
    <div id='ct_sp' style=" display: none;">
        <div style="display: flex; background-color: rgb(97, 182, 133); border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <div style="width: 10%;">
                <center><button class="btn-back" onclick="back_qlsp()">&lt&lt&lt</button></center>
            </div>
            <div  style="width: 80%;">
                <center><h2 style="color:white;">PRODUCT DETAILS </h2></center>
            </div>
        </div>
        <div>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">ProductID(not edit)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_id" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" value="edit_id" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Model</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_model" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_model" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Price</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_price" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_price" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Weight</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_w" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_w" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Color</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_color" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_color" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Num Of Product</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_num" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_num" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Supplier</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_supplier" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_supplier" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">CPU(Laptop/PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_cpu" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_cpu" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">RAM(Laptop/PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_ram" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_ram" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Storage(Laptop/PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_storage" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_storage" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Screen(Laptop/PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_screen" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_screen" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Card(Laptop/PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_card" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_card" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">MainConnection(Laptop/PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_mc" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_mc" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">OS(Laptop/PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_os" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_os" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Battery(Laptop)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_bat" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_bat" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr><div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Case(PC)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_case" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_case" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr><div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Standard Connection(Mouse)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_sc" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_sc" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr><div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Connection Protocol(Mouse)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_cp" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_cp" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr><div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Led(Mouse)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="number" value="" id="edit_led" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_led" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr><div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Size(Mouse)</p>
                </div>
                <div style="width:40%;">
                    <input disabled="" type="text" value="" id="edit_size" style="margin: 20px; font-size: 25px; border: none;  border-radius: 5px; color:dodgerblue;">
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_size" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr><div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Describe</p>
                </div>
                <div style="width:40%;">
                    <textarea cols="60" rows="10" id="edit_dep"></textarea>
                </div>
                <div style="width:10%;">
                    <button style="margin: 20px; font-size: 25px;" onclick="edit(this.value)" value="edit_dep" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr>
            <div style="display: flex;">
                <div style="width:50%;">
                    <p style="margin: 20px; padding:0px; color:dodgerblue; font-size: 25px;">Image</p>
                </div>
                <div style="width:30%;">
                    <img src="" alt="anh" width="70%" id="edit_img1">
                </div>
                <div style="width:20%;">
                    <input type="file" id="edit_img2">
                </div>
            </div>
            <hr>
            <center><button type="button" onclick="update()" style="width: 70%;" class="submit">UPDATE</button></center>
        </div>
    </div>
    <script>
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
    xhttp.open("POST", "library/admin/updateProduct.php", false);
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
    xhttp.open("GET", "library/admin/getDataSearch.php"+str, false);
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
    xhttp.open("GET","library/admin/deleteProduct.php?id="+id, false);
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
    xhttp.open("GET","library/admin/getProductById.php?id="+id+'&type='+type, true);
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

    funcPOST("library/admin/addLaptop.php", get_value_add_laptop);
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
    funcPOST("library/admin/addPC.php", get_value_add_pc);
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
    funcPOST("library/admin/addMouse.php", get_value_add_mouse);
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
                fetch('library/admin/uploadImg.php', {method: "POST", body: formData});
            }
    </script>
</body>
</html>
