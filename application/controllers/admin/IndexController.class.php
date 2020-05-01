<?php
    class IndexController extends Controller{

        public function indexAction(){
            // Load View template
            include  CURR_VIEW_PATH . "index.html";
        }
        
    }
?>