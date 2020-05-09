<?php
class IndexController extends Controller
{

    public function indexAction()
    {
        $makeModel = new MakeModel();
        $this->makes = $makeModel->getMakes();

        // Load View template
        include  CURR_VIEW_PATH . "index.php";
    }

    public function createAction()
    {
        $makeModel = new MakeModel();
        $makeObj = new stdClass();
        if (($_SERVER["REQUEST_METHOD"] == "POST")) {
            $makeObj->Name = $_REQUEST['fname'];
            $makeObj->Abrv = $_REQUEST['fabrv'];
            $makeModel->createMake($makeObj);
            header('location: /index');
        } else if (($_SERVER["REQUEST_METHOD"] == "GET")) {
            // Load View template
            include  CURR_VIEW_PATH . "create.php";
        }
    }

    public function updateAction()
    {
        $makeModel = new MakeModel();
        $makeObj = new stdClass();

        if (($_SERVER["REQUEST_METHOD"] == "POST")) {
            $makeObj->Id = $_REQUEST['fid'];
            $makeObj->Name = $_REQUEST['fname'];
            $makeObj->Abrv = $_REQUEST['fabrv'];
            $makeModel->updateMakeById($makeObj);
            header('location: /index');
        } else if (($_SERVER["REQUEST_METHOD"] == "GET")) {
            if (isset($_REQUEST['id'])) {
                $this->make = $makeModel->getMakeById($_REQUEST['id']);
                include  CURR_VIEW_PATH . "update.php";
            }
        }
    }
}
