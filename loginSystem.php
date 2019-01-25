<?php 

    session_start();

//username= 'v' password= 'v'

    if ($_POST['username']==='v' && $_POST['passwd']==='v'){
       
        $_SESSION['logged_in']= true;
        $_SESSION['username']=$_POST['username'];
        //redirect to welcome page
    
        header('Location: welcome.php');
        exit;
    }

else{
    header('Location: login.php');
    exit;
}

    //after unsuccesful login
    //  $_SESSION['logged_in']= false;
    //redirect  to login page


?>




