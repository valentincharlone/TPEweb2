<?php

class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(isset($_SESSION['username'])){
            return true;
        }
        else{
            return false;
        }   
        
        }
        function checkAdimn() {
            if($_SESSION['administrador']==1) {
                return true;
            }
            else {
                return false;
            }
        }
    }

