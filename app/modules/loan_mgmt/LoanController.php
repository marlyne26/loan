<?php

namespace app\modules\loan_mgmt;
use app\core\Controller;
use app\database\DBController;

class LoanController implements Controller{

    public function Route($data)
    {
    }

    static function Views($page)
    {
        
        $viewpath = "../app/modules/loan_mgmt/views/";

        switch ($page[1]) {

            case 'viewLoan':
                load($viewpath . "viewLoan/viewLoan.php");
                DBController::logs("Hellop");
                break;

            default:
                // session_destroy();
                include '404.php';
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                break;
        }
    }
}