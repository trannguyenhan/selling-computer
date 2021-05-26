<?php
require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';

$service= new GuestServices();
$guests=$service->getAll();
$listTmpBill = $service->getAllListProductsBill();

$user = "";
$phone= "";
$name = "";

if(array_key_exists("user", $_POST)){
  $user = strtolower($_POST['user']);
}
if(array_key_exists("name", $_POST)){
  $name = strtolower($_POST['name']);
}
if(array_key_exists("phone", $_POST)){
  $phone = strtolower($_POST['phone']);
}

$users= array();
$listBill = array();
foreach($guests as $g){
  $guser= strtolower($g-> getUsername());
  $gname= strtolower($g->getName());
  $gphone= strtolower($g->getTelephone());
  if(($user=="" || strpos($guser, $user) !== false) && ( $name=="" || strpos($gname, $name) !== false) &&
        ( $phone=="" || strpos($gphone, $phone) !== false)){
          array_push($users, $g);
  }
}

foreach ($listTmpBill as $tmpBill) {
    $username = $tmpBill->getUsername();
    $user = $service->get($username);
    if(in_array($user, $users)){
        array_push($listBill, $tmpBill);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management | MTHH</title>
    <style>
        p {
        color:rgb(35, 102, 226); font-size: 25px; margin-bottom:0px;
        }
        .input1 {
        width: 70%;
        height: 30px;
        border-radius: 5px;
        }
        .btn{
        border: none;
        background-color: dodgerblue;
        color: white;
        font-size: 20px;
        margin-top: 47px;
        padding: 10px;
        border-radius: 5px;
        }
        th {
        width:25%;
        color:rgb(35, 102, 226);
        font-size: 30px;
        }
        td {
        color:rgb(26, 12, 7);
        font-size: 25px;
        }
    </style>

    </head>
    <body>
        <div style="color:rgb(35, 102, 226);"><center><h1>ACCOUNT MANAGEMENT</h1></center></div>
        <hr>
        <form action="" method="post">
            <div>
                <div style="width:28%; float:left; height: 70px;">
                    <p>User</p>
                    <input class="input1" type="text" name="user">
                </div>

                <div style="width:28%; float:left; height: 70px;">
                    <p>Name</p>
                    <input class="input1" type="text" name="name">
                </div>
                <div style="width:28%; float:left; height: 70px;">
                    <p>Phone</p>
                    <input class="input1" type="text" name="phone">
                </div>
                <div style="width:16%; float:left; height: 70px;">
                    <input class="btn" type="submit" value="Tìm kiếm">
                </div>

            </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <br><br>
        <table border="1" style="width:100%;">
            <tr>
                <th >UserName</th>
                <th >Full Name</th>
                <th >Phone</th>
                <th >Address</th>
            </tr>
            <?php
            foreach($users as $u){
            ?>
            <tr>
                <td><?php echo $u->getUsername()?></td>
                <td><?php echo $u->getName()?></td>
                <td><?php echo $u->getTelephone()?></td>
                <td><?php echo $u->getAddress()?></td>
            </tr>
            <?php } ?>
        </table>
        <?php
            $sum_success = 0;
            $cnt = 0;
            foreach ($listBill as $bill) {
                $product;
                $type = TypeProductsServices::checkType($bill->getProductID());
                if($type == Type::PC){
                  $service = new PCServices();
                  $product = $service->get($bill->getProductID());
                } else if ($type == Type::LAPTOP){
                  $service = new LaptopServices();
                  $product = $service->get($bill->getProductID());
                } else if ($type == Type::MOUSE){
                  $service = new ComputerMouseProductsServices();
                  $product = $serice->get($bill->getProductID());
                }

                if($bill->getStatus() == 1){
                    $sum_success += $product->getPrice();
                    $cnt++;
                }

            }
        ?>
        <br /><br /><br /><br />
        <h2>Sản phẩm đặt hàng</h2><h2>Tổng số tiền đã bán thành công : <?php echo $sum_success ?></h2><h2>Tổng số sản phẩm đã bán thành công : <?php echo $cnt ?></h2>
        <div class="products-container" b>
          <table border="1" style="width:100%;">
              <tr>
                  <td>Sản phẩm</td>
                  <td>Khách hàng</td>
                  <td>Ngày đặt hàng</td>
                  <td>Tên sản phẩm</td>
                  <td>Số lượng</td>
                  <td>Trạng thái</td>
                  <td>Hành động</td>
              </tr>
          <?php
              for ($i=count($listBill)-1; $i>=0; $i--) {
                $bill = $listBill[$i];
                $product;
                $type = TypeProductsServices::checkType($bill->getProductID());
                if($type == Type::PC){
                  $service = new PCServices();
                  $product = $service->get($bill->getProductID());
                } else if ($type == Type::LAPTOP){
                  $service = new LaptopServices();
                  $product = $service->get($bill->getProductID());
                } else if ($type == Type::MOUSE){
                  $service = new ComputerMouseProductsServices();
                  $product = $serice->get($bill->getProductID());
                }
          ?>
            <tr>
                <form action="library/bill_success.php" method="POST">
                  <input type="text" name="bill_id" value="<?php echo $bill->getBillID() ?>" style="display: none">
                  <td><img src="<?php echo $product->getImage() ?>" alt="" style="max-height : 100px;"></td>
                  <td><?php echo $bill->getUsername() ?></td>
                  <td><p id = 'deal'><?php echo $bill->getDateBill() ?></p></td>
                  <td><p><?php echo $product->getModel() ?></p></td>
                  <td><p id = 'quantity'>x<?php echo $bill->getQuantity() ?></p></td>
                  <td><p id = 'status'><?php
                    if($bill->getStatus() == 0) echo "Đang đặt hàng";
                    else echo "Thành công";
                    ?></p></td>
                    <td style="text-align : center"><input type="submit" value="Hoàn thành"></td>
                </form>
            </tr>
        <?php } ?>
        </table>
      </div>
    </body>
</html>
