<?php

if(isset($_POST) && isset($_FILES['file'])){
	move_uploaded_file($_FILES['file']['tmp_name'], '../../public/images/products/' . $_FILES['file']['name']);
}
