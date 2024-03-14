<?php

namespace app\modules\loan_mgmt\classes;

use app\database\DBController;
use app\misc\FCM;
use app\misc\SMS;


class Loan
{

   /* 
     Current Version: 1.0.0
     Created By: Devkanta,     dev1@techz.in
     Created On: 
     Modified By:
     Modified On: 

 */

   function addNewPayment($data)
   {
      //prepare array 
      $params = array(
         array(":ReferenceNumber", $data["referenceNumber"]),
         array(":PayeeName", $data["payeeName"]),
         array(":Amount", $data['amount']),
      );


      /*  Info: 
          Description: For adding new payments
              Created on : 07-03-2024 (Marlyn) : 
              Modify on : 
            
          
  
      */


      $query = "INSERT INTO `Payment`(`RefNum`, `Payee`,`Amount`) VALUES (:ReferenceNumber,:PayeeName,:Amount);";
      //$query="INSERT INTO `Setting_State`( `StateName`) VALUES (:StateName); ";
      $res = DBController::ExecuteSQL($query, $params);
      if ($res) {
         return array("return_code" => true, "return_data" => "Payment successful");
      }
      return array("return_code" => false, "return_data" => "Error payment");
   }




   function getAllPayment($data)
   {

      $query = "SELECT * FROM `Payment`";
      $res = DBController::getDataSet($query);
      if ($res) {
         return array("return_code" => true, "return_data" => $res);
      }
      return array("return_code" => false, "return_data" => "Error payment");


   }

   function addBorrower($data)
   {
      //prepare array 
      $params = array(
         array(":BorrowerName", $data["BorrowerName"]),
         array(":LoanType", $data['LoanType']),
         array(":Duration", $data['Duration']),
         array(":Amount", $data['amount']),
      );
      $query = "INSERT INTO `Borrower`(`Name`,`LoanType`,`Duration`,`Amount`) VALUES (:BorrowerName,:LoanType,:Duration,:Amount);";
      //$query="INSERT INTO `Setting_State`( `StateName`) VALUES (:StateName); ";
      $res = DBController::ExecuteSQL($query, $params);
      if ($res) {
         return array("return_code" => true, "return_data" => "Borrower Added");
      }
      return array("return_code" => false, "return_data" => "Error");
   }
   function getAllBorrower($data)
   {

      $query = "SELECT * FROM `borrower`";
      $res = DBController::getDataSet($query);
      if ($res) {
         return array("return_code" => true, "return_data" => $res);
      }
      return array("return_code" => false, "return_data" => "Error");


   }
}