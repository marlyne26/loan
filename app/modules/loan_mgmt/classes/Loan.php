<?php

namespace app\modules\loan_mgmt\classes;

use app\database\DBController;
use app\misc\FCM;
use app\misc\SMS;


class Loan
{



    function addNewPayment($data)
    {
       //prepare array 
          $params=array(
            array(":ReferenceNumber",$data["referenceNumber"]),
            array(":PayeeName",$data["payeeName"]),
            array(":Amount",$data['amount']),
        );
        //save the product
        $query="INSERT INTO `payment`( `RefNum`, `Payee`,`Amount`) VALUES (:ReferenceNumber,:PayeeName,:Amount);";
        //$query="INSERT INTO `Setting_State`( `StateName`) VALUES (:StateName); ";
        $res=DBController::ExecuteSQL($query,$params);
         if($res){
            return array("return_code" => true, "return_data"=>"States added successfully");  
         }
         return array("return_code" => false, "return_data" => "Error payment");  
    }

}
