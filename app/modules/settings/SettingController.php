<?php

namespace app\modules\settings;

use app\core\Controller;
use app\modules\settings\classes\Calendar;
use app\modules\settings\classes\Caste;
use app\modules\settings\classes\Community;
use app\modules\settings\classes\Dashboard;
use app\modules\settings\classes\Designation;
use app\modules\settings\classes\District;
use app\modules\settings\classes\Gender;
use app\modules\settings\classes\Religion;
use app\modules\settings\classes\State;
use app\modules\settings\classes\Server;
use app\modules\settings\classes\Nationality;
use app\modules\settings\classes\Department;
use app\modules\settings\classes\Office;

class SettingController implements Controller
{
    /**
     * @param $data
     * @return array
     */
    function Route($data)
    {

        $jsondata = $data["JSON"];

        switch ($data["Page_key"]) {

            case "getNationality":
                return (new Nationality())->getNationality();

            case "getGender":
                return (new Gender())->getGender($jsondata);
    
            case "getReligion":
                return (new Religion())->getReligion($jsondata);

            case "getCaste":
                return (new Caste())->getCaste($jsondata);

            case "getCommunity":
                return (new Community())->getCommunity($jsondata);

            case "getDesignations":
                return (new Designation())->getDesignations($jsondata);

            case 'getState':
                return (new State())->getState($jsondata);

            case 'addState':
                return (new State())->addstate($jsondata);

            case 'addServer':
                return (new Server())->addserver($jsondata);

            case 'createDomain':
                return (new Server())->createDomain($jsondata);

            case 'getServer':
                return (new Server())->getserver($jsondata);

            case 'getDistrict':
                return (new State())->getDistrict($jsondata);

            case 'getAllDistrict':
                return (new District())->getAllDistrict($jsondata);

            case 'getAllServer':
                return (new Server())->getAllServer($jsondata);

            case 'addDistrict':
                return (new District())->addDistrict($jsondata);

            case 'getAllvisitedUserInaDay':
                return (new Dashboard())->getAllvisitedUserInaDay($jsondata);

            case 'getPrayageduLinks':
                return (new State())->getPrayageduLinks($jsondata);

            case 'generatePrayageduLinks':
                return (new State())->generatePrayageduLinks($jsondata);

            case 'getTodayVisit':
                return (new State())->getTodayVisit();

            case 'deleteServer':
                return (new Server())->deleteServer($jsondata);

            case 'addDepartment':
                return (new Department())->addDepartment($jsondata); // added by dev on 05/11/23

            case 'getDepartment':
                return (new Department())->getDepartment($jsondata); // added by dev on 05/11/23

            case 'onDepartmentDelete':
                return (new Department())->onDepartmentDelete($jsondata); // added by dev on 05/11/23

            case 'onUserDelete':
                return (new Department())->onUserDelete($jsondata); // added by dev on 05/11/23


            case 'getDepartmentForAssignGrievanceCategory':
                return (new Department())->getDepartmentForAssignGrievanceCategory($jsondata); // added by dev on 20/12/23 


            case 'getEmployeeByDepartmentID':
                return (new Department())->getEmployeeByDepartmentID($jsondata); // added by dev on 20/12/23 

            case "getCalendarTextType":
                return (new Calendar())->getCalendarTextType($jsondata);

            case "getCompanyCalendar":
                return (new Calendar())->getCompanyCalendar($jsondata);

            case "addCalendar":
                return (new Calendar())->addCalendar($jsondata);

            case "deleteCalendar":
                return (new Calendar())->deleteCalendar($jsondata);

            //for office
            case "getAllOffice":
                return (new Office())->getAllOffice($jsondata);

            case "getOfficeByID":
                return (new Office())->getOfficeByID($jsondata);
               



            default:
                header('HTTP/1.1 401  Unauthorized Access');
                header("Status: 401 ");
                session_destroy();
                return array("return_code" => false, "return_data" => array("Page Key not found"));
        }
    }

    static function Views($page)
    {

        $viewpath = "../app/modules/settings/views/";

        switch ($page[1]) {

            case 'school':
                load($viewpath . "school.php");
                break;
            case 'state':
                load($viewpath . "state.php");
                break;
            case 'district':
                load($viewpath . "district.php");
                break;
            case 'selectserver':
                load($viewpath . "selectserver.php");
                break;
            case 'addserver':
                load($viewpath . "addserver.php");
                break;

            case 'prayagedulinks':
                load($viewpath . "prayagedulinks.php");
                break;

            case 'todayVisitList':
                load($viewpath . "todayVisitList.php");
                break;

            case 'support':
                load($viewpath . "changepassword.php");
                break;

            case 'managedepartment':
                load($viewpath . "managedepartment.php");  // added by dev on 05/11/23
                break;
            case 'calendar':
                load($viewpath . "calendar.php"); 
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
