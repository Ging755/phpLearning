<?php
    class IndexController extends Controller{

        public function indexAction(){
            $test = "This is a Test Variable";

            // Load View template
            include  CURR_VIEW_PATH . "index.html";
        }
        
        public function testAction(){
            // Load View template
            include  CURR_VIEW_PATH . "test.html";
        }
    }
?>