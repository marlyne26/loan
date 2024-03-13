<?php

namespace app\modules\clients;

use app\core\Controller;
use app\modules\clients\classes\Client;
use app\modules\settings\classes\Server;

class ClientController implements Controller
{

    public function Route($data)
    {
        $jsondata = $data["JSON"];

        switch ($data["Page_key"]) {
            case 'Unsubscribe':
                return (new Client())->Unsubscribe($jsondata);

            case 'getClients':
                return (new Client())->getClients($jsondata);

            case 'addClient':
                return (new Client())->addClient($jsondata);

            case 'addClientSubscription':
                return (new Client())->addClientSubscription($jsondata);

            case 'deleteClient':
                return (new Client())->deleteClient($jsondata);

            case 'getAllServer':
                return (new Server())->getAllServer($jsondata);


            case 'deleteClientSubscription':
                return (new Client())->deleteClientSubscription($jsondata);

            
            case 'getClient_subscriptionById':
                return (new Client())->getClient_subscriptionById($jsondata);

                // case 'getAPIByClientSubscriptionId':
                //     return (new Client())->getAPIByClientSubscriptionId($jsondata);

            case "getDataFromAPI":
                return (new Client())->getDataFromAPI($jsondata);

            case "sendotp":
                return (new Client())->sendotp($jsondata);

            default:
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                session_destroy();
                return array("return_code" => false, "return_data" => array("Page Key not found"));
        }
    }

    public static function Views($page)
    {

        $viewpath = "../app/modules/$page[0]/views/";

        switch ($page[1]) {

            case 'viewclient':
                load($viewpath . "viewclient.php");
                break;
            case 'clientsubscription':
                load($viewpath . "clientsubscription.php");
                break;
            case 'clientreport':
                load($viewpath . "clientReport.php");
                break;
            case 'invoice':
                load($viewpath . "invoice.php");
                break;

            case 'viewleads':
                load($viewpath . "viewleads.php");
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
