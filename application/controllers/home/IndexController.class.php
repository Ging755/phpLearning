<?php
    class IndexController extends Controller{

        public function indexAction(){
            $userModel = new UserModel();
            $this->users = $userModel->getUsers();
            $this->test = "This is a Test Variable";
            $this->parameter = isset($_REQUEST['number']) ? $_REQUEST['number'] : "No Number";

            // Load View template
            include  CURR_VIEW_PATH . "index.php";
        }
        
        public function testAction(){
            $this->test1 = "Test 123 123";
            // Load View template
            echo $this->test1;
        }
    }
?>