<?php
      require_once("controllers/controller.php");
      $controller = new Controller();
      

      if (isset($_POST['logout'])) {
        unset($_SESSION['username']);
      }

      if (isset($_POST['username']) && isset($_POST['password'])) 
      {
        $controller->Login($_POST['username'], $_POST['password']);
      }

      if (isset($_POST['R_username'])&&isset($_POST['R_password'])&&isset($_POST['R_Cpassword']) ) 
      {
        if ($_POST['R_password']==$_POST['R_Cpassword']) 
        {
          $controller->Register($_POST['R_username'],$_POST['R_password']);
          $_SESSION['username'] = $_POST['R_username'];
          $_SESSION['password'] = $_POST['R_password'];
        }
      }

      if (!isset($_SESSION['username']) ) {
        require_once "views/login.php";
      }
      else
      {
        if (($_SESSION['username'] == "admin") && ($_SESSION['password'] == "admin"))
        {
           $controller->invokeadmin();
        }
        else
        {
          $controller->invoke();
        }
        
      }

?>