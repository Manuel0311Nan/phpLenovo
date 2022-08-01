<?php

require_once(dirname(__FILE__) . '/../src/functions.php');

//Información sobre la base de datos y conexión a la API
// define('DOMAIN', 'https://azkenservices.com/actions-data/bricomart/public');    //Enlace a la carpeta donde está alojada la plataforma
define('SERVER', 'localhost');                                                             //IP al servidor donde está alojada la plataforma. Por defecto localhost:3306
define('USER', '');                                                                 //Usuario de la base de datos. Será el nombre-de-la-empresa_nombre-evento
define('PASS', '');                                             //Contraseña de la base de datos. Igual para todas
define('DATABASE', 'lenovo');                                                 //Contraseña de la base de datos. Igual para todas
// define('LINK_LOGO', DOMAIN . '/assets/img/logo.png');                                                   //Logo
// define('IMAGE_BACKGROUND', DOMAIN . '/assets/img/background.png');                                                   //background
// define('FAVICON', DOMAIN . '/assets/img/favicon.png');                                                   //favicon
//¿No sabes cómo obtener el md5(texto) para configurarlo en Plesk? Entra en el siguiente enlace: http://www.md5.cz/
