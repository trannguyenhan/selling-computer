<?php
$path_project = 'selling-computer';
#define('DS', DIRECTORY_SEPARATOR);
#define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);
require_once ROOT . DS . 'services' . DS . 'MySqlConnect.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Evaluate.php';

class EvaluateServices extends MySqlConnect {
    /**
     * The method support insert data to database
     * @param Evaluate $evaluate
     */
    public function insert($evaluate) {
        // add to evaluate table
        $query = "insert into evaluate(user_name, product_id, star, your_comment, date_comment)
                    value (" .
                    "'" . $evaluate->getUsername() . "' ," .
                    $evaluate->getProductID() . "," .
                    $evaluate->getStar() . "," .
                    "'" . $evaluate->getComment() . "' ," .
                    "'" . date_create()->format('Y-m-d h:i:s') . "'"
                        . ")";
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Return product have product_id = $product_id
     * @param int $product_id
     * @return array
     */
    public function getAll($product_id){
        $listEvaluate = array();
        $query = "select * from evaluate
                    where product_id='" . $product_id . "'";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $username = $row["user_name"];
            $productID = $row["product_id"];
            $star = $row["star"];
            $comment = $row["your_comment"];
            $date = $row["date_comment"];

            $evaluate = new Evaluate($username, $productID, $star, $comment, $date);
            array_push($listEvaluate, $evaluate);
        }

        return $listEvaluate;
    }

}
