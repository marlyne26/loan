<?php

namespace app\modules\loan_mgmt;

use app\modules\loan_mgmt\classes\Loan;
use app\core\Controller;
use app\database\DBController;

class LoanController implements Controller
{


    public function Route($data)
    {
        $jsondata = $data["JSON"];

        switch ($data["Page_key"]) {

            case 'addNewPayment':
                return(new Loan())->addNewPayment($jsondata);

            case 'getAllPayment':
                return(new Loan())->getAllPayment($jsondata);

            case 'addBorrower':
                return(new Loan())->addBorrower($jsondata);

            case 'getAllBorrower':
                return(new Loan())->getAllBorrower($jsondata);

            case 'getAllLoanRequest':
                return(new Loan())->getAllLoanRequest($jsondata);


            default:
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                session_destroy();
                return array("return_code" => false, "return_data" => array("Page Key not found"));
        }
    }




    // public function Route($data)
    // {

    //     $jsondata = $data["JSON"];

    //     switch ($data["Page_key"]) {

    //         case 'addNewPayment':
    //             return(new Loan())->addNewPayment($jsondata);

    //             case 'getAllPayment':
    //                 return(new Loan())->getAllPayment($jsondata);



    //         // case 'getAllPayments':
    //         //     return(new Loan())->getAllPayments($jsondata);


    //         default:
    //             header('HTTP/1.1 401  Unauthorized Access');
    //             header("Status: 401 ");
    //             session_destroy();
    //             return array("return_code" => false, "return_data" => array("Page Key not found"));
    //     }

    // }

    static function Views($page)
    {

        $viewpath = "../app/modules/loan_mgmt/views/";

        switch ($page[1]) {

            case "Home":
                load($viewpath . "Home.php");
                break;

            case "loanRequest":
                load($viewpath . "loanRequest.php");
                break;

            case "bankStatement":
                load($viewpath . "bankStatement.php");
                break;

            case "payments":
                load($viewpath . "payments.php");
                break;

            case "types":
                load($viewpath . "loanTypes.php");
                break;

            case "checkLoanRequest":
                load($viewpath . "checkLoanRequest.php");
                break;

            case "manageborrowers":
                load($viewpath . "manageBorrowers.php");
                break;


            // case 'viewLoan':
            //     load($viewpath . "viewLoan/viewLoan.php");
            //     DBController::logs("Hellop");
            //     break;

            // case 'loan_plans':
            //     load($viewpath . "loan_plans.php");
            //     DBController::logs("Hellop");
            //     break;

            default:
                // session_destroy();
                include '404.php';
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                break;
        }
    }
}
