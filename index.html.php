<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
            color: white;
            zoom: 110%;
        }


        .container {
            margin-top: 2em;
            margin-right: 5em;
			padding-left: 7em;
        }

        .bundle {
            margin: 0.5em;
            padding: 1em;
            height: 100%;
        }

        .bundleGreen {
            border: 1px solid #76ac62;
        }

        .bundleRed {
            border: 1px solid #ff1d11;
        }

        .colRed {
            background-color: red;
            margin: 0.5em;
            padding-top: 1em;
            margin-bottom: 0em !important;
            min-height: 240px;
            display: block;

        }

        .banner {
            margin: 0.5em;
        }

        .imgLogo {
            height: 13%;
        }

        .imgDataCenter {
            height: 32%;
        }

        .imgIcon {
            height: 30px;
            margin-right: .4em;

        }

        .imgBanner {
            width: 600px;
        }

        .logoLenovo {
            width: 10%;

        }

        .imgServers {
            height: 26vh;
            display: flex;
            margin: auto;
            padding-right: 0.5em;
            justify-content: center;
            margin-bottom: 1em;
        }


        footer {
            width: 200%;
            padding: 1% 5%;
            text-align: right;
            color: white;
        }

        hr {
            background-color: white !important;
            opacity: 1;
            border: 1px solid white !important;
            margin-left: 1em;
            margin-right: 1em;
        }

        .rowRight {
            animation: 3s ease-in-out opacityIn;
        }

        .rowRight1 {
            animation: 1s ease-in-out slideInRight;
        }

        .rowRight2 {
            animation: 1.5s ease-in-out slideInRight;
        }

        .rowRight3 {
            position: relative;
            left: 10%;
            margin: 0.5em;
            animation: 3s ease-in-out opacityIn;
        }

        .col1 {
            animation: 2s ease-in-out slideInLeft;
        }

        .col2 {
            animation: 1.5s ease-in-out slideInLeft;
        }

        .col3 {
            animation: 1s ease-in-out slideInLeft;
        }

        .col4 {
            animation: .5s ease-in-out slideInLeft;
        }

        .icon {
            margin-top: 1em;

        }

        @media screen and (max-width: 991px) {
            .bundle {
                height: auto;
            }

            .colRed {
                display: block;
            }

            .col-2 {
                width: 35%;
            }

            .imgServers {
                height: 19vh;

            }

        }

        @media screen and (max-width: 1730px) {
            .col-1 {
                width: 55%;
            }

            .bundle {
                height: auto;
            }

            .rowRight3 {
                left: 0;
            }

        }

        @media screen and (max-width: 740px) {
            .imgBanner {
                display: none;
            }

            .bundle {
                width: 80%;
            }
			.logoLenovo {
            	width: 20%;

        	}
			footer {   
    			text-align: center;
			}
			.container {
            margin-top: 2em;
            margin-right: 0em;
			padding-right: 2em;
			padding-left: 0em;
        	}
			.imgDataCenter {
    			height: 23%;
			}
			.imgLogo {
   				height: 9%;
			}
        }

        @media screen and (max-width: 720px) {
            .col-2 {
                width: 80%;
            }

            .colRed {
                min-height: 200px;

            }

            .container {
                padding-left: 2em;
            }

            .titleLenovo {
                width: 60%;
            }
        }
        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            0% {
                transform: translateX(+100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes opacityIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
        <script src="https://kit.fontawesome.com/4790886f31.js" crossorigin="anonymous"></script>
    <title>Lenovo</title>
  </head>
  <body>
  <div class="container">
    <h1 class="titleLenovo">Lenovo Storage Race to Win</h1>
   <div class="row mb-5">
    <div class="col-2 colRed col1">
      <h2 class="text-center">
      <i class="fa-solid fa-triangle-exclamation fa-fade"></i>Rápido
      </h2>
      <br>
      <p>Latencias bajas y rendimiento superior para acelerar las aplicaciones más exigentes gracias a Lenovo Thinksystem DM</p>
    </div>
    <div class="col-2 colRed col2">
      <h2 class="text-center">
      <i class="fa-solid fa-triangle-exclamation fa-fade"></i>Versátil
      </h2>
      <br>
      <p>Gestión de datos unificados en SAN, NAS, Objeto y en la nube híbrida sin silos gracias a su SO Ontap</p>
    </div>
    <div class="col-2 colRed col3">
      <h2 class="text-center">
      <i class="fa-solid fa-triangle-exclamation fa-fade"></i>Simple
      </h2>
      <br>
      <p>Setup en 10 minutos, desde el arranque hasta el servicio de datos de la aplicación</p>
    </div>
    <div class="col-2 colRed col4">
      <h2 class="text-center">
      <i class="fa-solid fa-triangle-exclamation fa-fade"></i>Seguro
      </h2>
      <br>
      <p>Protección de datos interada. Protección Autónoma conta Ransomware.</p>
    </div>
    <div class="col-1 rowRight">
<img class=" icon imgBanner" src= "./assets/images/MOTO.jpg">
    </div>
   </div>
   <h2>Bundles Plan Rodillo</h2>
   <h5>Toma la delantera en la carrera crean oportunidades usando nuestros paquetes a precios competitivos</h5>
   <div class="row">
    <div class="col-4 bundle bundleRed col-sm-4 col-md-4 rowRight1">
        <img class= "imgServers img-fluid" src="./assets/images/ban_Mesa1.png"alt="imageServer">
        <ul>
            <li>Cabina Lenovo DM3000H (doble controladora activo/activo) 16Gb Fc/10Gb Opt</li>
            <li>Licencia Ontap Unified Fundamentals(San, NAS, Object)</li>
            <li>Capacidad: 28.9 TiB netos</li>
            <li>12 discos 4TB NL-SAS</li>
            <li>8 puertos 10GbE/16Gb FC</li>
            <li>Soporte Premier 3 años</li>
            <li>Servicio de Instalación y Deployment (Incluido)</li>
        </ul>
        <h5 class="text-danger mx-2"> 16.680€ (sin IVA)</h5>
    </div>
    <div class="col-4 bundle bundleGreen col-sm-4 col-md-4 rowRight2">
        <img class= "imgServers img-fluid" src="./assets/images/ban_Mesa2.png" alt="imageServer">
        <ul>
            <li>Cabina Lenovo AFA DM5000F (doble controladora activo/activo) 16 Gb FC/10Gb Opt</li>
            <li>Lcencia Ontap Unified Fundamentals (SAN, NAS, Object)</li>
            <li>18 discos 960GB SSD</li>
            <li>8 puertos 10GBE/16Gb FC</li>
            <li>Capacidad: 11,37 TiB</li>
            <li>Soporte Premier 3 años</li>
            <li>Servicio de Instalación y Deployment (Incluido)</li>
        </ul>
        <h5 class="text-success mx-2"> 28.411€ (sin IVA)</h5>
    </div>
    <div class="col-1 col-sm-12 col-md-3 rowRight3">
        <img class="imgLogo" src="./assets/images/thinksystem.png" alt="logoThinksyste">
        <h3>DM Series</h3>
        <img class="imgDataCenter" src="./assets/images/datacenter.png" alt="logoThinksyste">
    </div>


<form action="registro.php" method="POST">
<h3>Suscríbete para recibir todas las noticias</h3>
<div class="mb-3 col-md-7 col-xl-5">
  <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="mb-3 col-md-7 col-xl-5 ">
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email@example.com">
</div>
   <input class="btn btn-danger" type="submit" name="register">
   </form>
    <footer>
    <img class="logoLenovo"  src="./assets/images/lenovo.png"  alt="">
   </footer>
   </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

