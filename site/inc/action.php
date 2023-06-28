<?php
include'function.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

switch($_POST['action']){
    case 'btn_modifier':
        MAJ_Evenement($_POST['Evenement']);
        header('Location: ../Index.php');
        break;
    
    case 'btn_annuler':
        header('Location: ../Index.php');
        break;

    case 'btn_connexion':

        login_AAPIB($_POST['username'], $_POST['password']);
        break;
}

?>