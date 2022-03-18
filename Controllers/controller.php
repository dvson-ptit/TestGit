<!--Erich Glenewinkel-->
<?php

    require_once('models/models.php');
    class Controller
    {
        public $model;
        
        public function __construct()
        {
            $this->model= new Model();//basic instantiate of the models class
        }
        
        public function log()
        {
            $reslt = $this->model->getlogin();
            
            if($reslt == 'login')
            { 
                include 'Views/userDashboard.php';
            }
            else
            {
                include 'Views/login.php';
            }
        }
    }
?>