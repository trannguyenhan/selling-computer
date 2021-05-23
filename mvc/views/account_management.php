<?php
    require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
    $service= new GuestServices();
    $guests=$service->getAll();
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
foreach($guests as $g){
$guser= strtolower($g-> getUsername());
$gname= strtolower($g->getName());
$gphone= strtolower($g->getTelephone());
if(($user=="" || strpos($guser, $user) !== false) && ( $name=="" || strpos($gname, $name) !== false) &&
( $phone=="" || strpos($gphone, $phone) !== false)){
array_push($users, $g);
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>D</title>
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
    </body>
</html>