var session = "";
<?php
			if(isset($_SESSION['username'])){
					echo "session = '" . $_SESSION['username'] . "' ;";
			}
			?>

function validComment() {
    if (session == "") {
        alert("Vui lòng đăng nhập để bình luận!");
        return false;
    }
    let comment = document.getElementById("your_comment").value;
    if (comment == "") {
        alert("Nhập bình luận để tiếp tục!");
        return false;
    }

    return true;
}

function validCart() {
    if (session == "") {
        alert("Vui lòng đăng nhập để sử dụng giỏ hàng!")
        return false;
    }

    return true;
}