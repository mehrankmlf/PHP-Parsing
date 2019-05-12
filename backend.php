<?php

include "connect.php";

$work=$_GET["work"];

if($work == "homeSlider") {

    $query = "SELECT * FROM sliderhome";

    $result = $connect->prepare($query);

    $result->execute();

    $out = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        $record = array();

        $record["photoname"] = $row["photoname"];

        array_push($out, $record);


    }

    echo json_encode($out);
}elseif ($work == "amazing"){

    $query1 = "SELECT * FROM tbl_main WHERE kind=1";

    $result1 = $connect -> prepare($query1);

    $result1->execute();

    $out1 = array();

    while($row1 = $result1->fetch(PDO::FETCH_ASSOC)){

        $record1 = array();

        $record1["img_name"] = $row1["img_name"];

        $record1["name"] = $row1["name"];

        $record1["pre_price"] = $row1["pre_price"];

        $record1["current_price"] = $row1["current_price"];

        array_push($out1,$record1);


    }

    echo json_encode($out1);


}elseif ($work == "justindigikala") {

    $query2 = "SELECT * FROM tbl_main WHERE kind=2";

    $result2 = $connect->prepare($query2);

    $result2->execute();

    $out2 = array();

    while ($row2 = $result2->fetch(PDO::FETCH_ASSOC)) {

        $record2 = array();

        $record2["img_name"] = $row2["img_name"];

        $record2["name"] = $row2["name"];

        $record2["pre_price"] = $row2["pre_price"];

        array_push($out2, $record2);

    }
    echo json_encode($out2);

}elseif ($work == "bestsellers") {

    $query3 = "SELECT * FROM tbl_main WHERE kind=3";

    $result3 = $connect->prepare($query3);

    $result3->execute();

    $out3 = array();

    while ($row3 = $result3->fetch(PDO::FETCH_ASSOC)) {

        $record3 = array();

        $record3["img_name"] = $row3["img_name"];

        $record3["name"] = $row3["name"];

        $record3["pre_price"] = $row3["pre_price"];

        array_push($out3, $record3);

    }
    echo json_encode($out3);

}elseif ($work == "newproducts") {

    $query4 = "SELECT * FROM tbl_main WHERE kind=4";

    $result4 = $connect->prepare($query4);

    $result4->execute();

    $out4 = array();

    while ($row4 = $result4->fetch(PDO::FETCH_ASSOC)) {

        $record4 = array();

        $record4["img_name"] = $row4["img_name"];

        $record4["name"] = $row4["name"];

        $record4["pre_price"] = $row4["pre_price"];

        array_push($out4, $record4);

    }
    echo json_encode($out4);
}
?>