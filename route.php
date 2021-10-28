<?php
    require_once "Controller/BootsController.php";
    require_once "Controller/UserController.php";
    require_once "Controller/MarksController.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }
    
    $params = explode('/', $action);

    $bootsController = new BootsController(); 
    $marksController = new MarksController(); 
    $userController = new UserController();

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home': 
            $bootsController->showHome(); 
            break;
            //BOTINES
        case 'botines': 
                 $bootsController->allBoots(); 
            break;           
        case 'viewBoot':
            $bootsController->viewBoot($params[1]);
            break;
        case 'filtrar':
            $bootsController->filtrar(); 
            break;  
        case 'createBoot': 
            $bootsController->formBoot(); 
            break;
        case 'insertBoot': 
            $bootsController->insertBoot(); 
            break;
        case 'deleteBoot': 
            $bootsController->deleteBoot($params[1]); 
            break;
         case 'showForm': 
            $bootsController->formUpBoot($params[1]); 
            break;
        case 'insertUpdateBoot': 
            $bootsController->updateBoot(); 
            break;
            //MARCAS
        case 'marcas': 
            $marksController->allMarks(); 
            break;  
        case 'showFormMark': 
            $marksController->formUpMark($params[1]); 
            break; 
        case 'insertUpdateMark': 
            $marksController->updateMark(); 
            break;
        case 'deleteMark': 
            $marksController->deleteMark($params[1]); 
            break;
        case 'insertMark': 
            $marksController->insertMark(); 
            break;

     //USUARIO
        case 'login':
           $userController->login();
           break;
        case 'logOut':
            $userController->logOut();
        case 'verify':
           $userController->verifyLogin();
           break;
        case 'register': 
           $userController->register(); 
            break;
        case 'insertRegister': 
            $userController->insertRegister(); 
            break;
        
        
    }