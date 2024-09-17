<?php
 
//Inclui arquivos de controlador nessecaros pata lifar com diferrentes açãoes
require 'controllers/AthaCotroller.php'; //Inclui o controlador de autenticação
require 'controllers/UserCotroller.php'; //Inclui o controlador de usuarios
require 'controllers/DashboardCotroller.php'; //Inclui o controlador de dashaboard
 
// Cria instancias dos controladores para utilizar seus metodos
$authController = new $AuthController(); //Instancia controlador de autenticação
$userController = new $userController(); //Instancia controlador de usuario
$dashboardController = new $DashboardController(); //Instancia controlador de dashboard
 
// Coleta a ação de URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET ['action'] ?? 'login'; // Usa operador de coalocencia nula (??) para definir 'login' se 'action' não estiver presente
 
switch($action){
    case 'login':
        $authController->login(); //chama o método de login do contolador de autenticação
}
 
?>
