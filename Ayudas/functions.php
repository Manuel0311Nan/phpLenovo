<?php

//Escanea las carpetas y te devuelve un array con ficheros
function dirToArray($dir)
{

  $result = array();

  $cdir = scandir($dir);
  foreach ($cdir as $key => $value) {
    if (!in_array($value, array(".", ".."))) {
      if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
        $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
      } else {
        $result[] = $value;
      }
    }
  }

  return $result;
}

//Comprueba la conexión con el servidor
function checkConnection($element)
{
  if ($element->connect_error) {
    exit('Error de conexion(' . $element->connect_errno . ')' . $element->connect_error);
  }
}

//Función para realizar la conexión al servidor
function connectServer($server, $user, $pass, $database)
{
  try {
    $dsn = "mysql:host=$server;dbname=$database;charset=utf8";
    return new PDO($dsn, $user, $pass);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

//Función para realizar la desconexión del servidor
function disconnectServer($conexion)
{
  $conexion = null;
}

//Dibuja un mensaje de error con las etiquetas y clases básicas con el parámetro recibido
function displayError($element)
{
  echo '<p class="text-left text-danger my-2">' . $element . '</p>';
}

//Realiza la sentencia en la base de datos y te devuelve el resultado
function doQuery($connection, $sql, $array)
{
  $stmt = $connection->prepare($sql);
  $stmt->execute($array);

  return $stmt;
}

//Devuelve el estado de la autetificación, si te has conectado de forma correcta
function getAuth($element)
{
  return ($element == 'true') ? true : false;
}

//Función que comprueba si el usuario ha introducido '@' en su nombre y si no se lo añade. Finalmente lo devuelve
function getUserAt($element)
{
  return substr($element, 0, 1) != '@' ?  '@' . $element : $element;
}

//En el caso de haber una Cookie de usuario, la recuperamos y la devolvemos
function getCookie($element)
{
  return isset($_COOKIE[$element]) ? $_COOKIE[$element] : "";
}

//Redirecciona la página actual a otra dirección con un simple parámetro
function reDirect($element)
{
  header('Location:' . $element);
}

//Envia correos electrónicos
function sendEmail($email, $asunto, $body)
{
  require_once(dirname(__FILE__).'/mailer/PHPMailer.php');
  require_once(dirname(__FILE__).'/mailer/SMTP.php');
  require_once(dirname(__FILE__).'/mailer/Exception.php');

  $recipients = $email;


  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->isSMTP();
  $mail->Mailer = "SMTP";
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "ssl";
  $mail->isHTML(true);
  // $mail->SMTPAutoTLS = true;
  $mail->Port = 465;
  $mail->CharSet = 'UTF-8';
  $mail->Host = "smtp.serviciodecorreo.es";
  $mail->Username = "";
  $mail->Password = '';
  $mail->FromName = "ZEDIS";
  $mail->Encoding = "base64";
  $mail->DKIM_passphrase = '';
  $mail->DKIM_identity = $mail->From;
  $mail->setFrom('', 'ZEDIS');
  if (is_array($email)) {
    foreach ($recipients as $email) {
      $mail->addCC($email);
    }
  } else {
    $mail->addAddress($email);
  }
  $mail->Subject = $asunto;
  $mail->Body = $body;

  if (!$mail->send()) {
    return "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
  } else {
    return "Enviado con éxito.";
  }
}
function returnbody($nombre){
    return '';
}

function porcentaje($total, $cantidad)
{
  if ($total == 0) {
    return 0;
  } else {
    $porcentaje = ((float)$cantidad * 100) / $total; // Regla de tres
    $porcentaje = round($porcentaje, 1);  // Quitar los decimales
    return $porcentaje;
  }
}

//Funcion para guardar una imagen en php
function saveImage($destination, $data)
{
  if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
    $data = substr($data, strpos($data, ',') + 1);
    $type = strtolower($type[1]); // jpg, png, gif

    if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
      throw new \Exception('invalid image type');
    }
    $data = str_replace(' ', '+', $data);
    $data = base64_decode($data);

    if ($data === false) {
      throw new \Exception('base64_decode failed');
    }
  } else {
    throw new \Exception('did not match data URI with image data');
  }

  file_put_contents($destination, $data);
}



// Funciones para recortar la imagen desde php
function image_handler($source_image, $destination, $tn_w = 100, $tn_h = 100, $quality = 100, $wmsource = false)
{
  // The getimagesize functions provides an "imagetype" string contstant, which can be passed to the image_type_to_mime_type function for the corresponding mime type
  $info = getimagesize($source_image);
  $imgtype = image_type_to_mime_type($info[2]);
  // Then the mime type can be used to call the correct function to generate an image resource from the provided image
  switch ($imgtype) {
    case 'image/jpeg':
      $source = imagecreatefromjpeg($source_image);
      break;
    case 'image/gif':
      $source = imagecreatefromgif($source_image);
      break;
    case 'image/png':
      $source = imagecreatefrompng($source_image);
      break;
    default:
      die('Invalid image type.');
  }
  // Now, we can determine the dimensions of the provided image, and calculate the width/height ratio
  $src_w = imagesx($source);
  $src_h = imagesy($source);
  $src_ratio = $src_w / $src_h;
  // Now we can use the power of math to determine whether the image needs to be cropped to fit the new dimensions, and if so then whether it should be cropped vertically or horizontally. We're just going to crop from the center to keep this simple.
  if ($tn_w / $tn_h > $src_ratio) {
    $new_h = $tn_w / $src_ratio;
    $new_w = $tn_w;
  } else {
    $new_w = $tn_h * $src_ratio;
    $new_h = $tn_h;
  }
  $x_mid = $new_w / 2;
  $y_mid = $new_h / 2;
  // Now actually apply the crop and resize!
  $newpic = imagecreatetruecolor(round($new_w), round($new_h));
  imagecopyresampled($newpic, $source, 0, 0, 0, 0, $new_w, $new_h, $src_w, $src_h);
  $final = imagecreatetruecolor($tn_w, $tn_h);
  imagecopyresampled($final, $newpic, 0, 0, ($x_mid - ($tn_w / 2)), ($y_mid - ($tn_h / 2)), $tn_w, $tn_h, $tn_w, $tn_h);
  // If a watermark source file is specified, get the information about the watermark as well. This is the same thing we did above for the source image.
  if ($wmsource) {
    $info = getimagesize($wmsource);
    $imgtype = image_type_to_mime_type($info[2]);
    switch ($imgtype) {
      case 'image/jpeg':
        $watermark = imagecreatefromjpeg($wmsource);
        break;
      case 'image/gif':
        $watermark = imagecreatefromgif($wmsource);
        break;
      case 'image/png':
        $watermark = imagecreatefrompng($wmsource);
        break;
      default:
        die('Invalid watermark type.');
    }
    // Determine the size of the watermark, because we're going to specify the placement from the top left corner of the watermark image, so the width and height of the watermark matter.
    $wm_w = imagesx($watermark);
    $wm_h = imagesy($watermark);
    // Now, figure out the values to place the watermark in the bottom right hand corner. You could set one or both of the variables to "0" to watermark the opposite corners, or do your own math to put it somewhere else.
    $wm_x = $tn_w - $wm_w;
    $wm_y = $tn_h - $wm_h;
    // Copy the watermark onto the original image
    // The last 4 arguments just mean to copy the entire watermark
    imagecopy($final, $watermark, $wm_x, $wm_y, 0, 0, $tn_w, $tn_h);
  }
  // Ok, save the output as a jpeg, to the specified destination path at the desired quality.
  // You could use imagepng or imagegif here if you wanted to output those file types instead.
  if (Imagejpeg($final, $destination, $quality)) {
    return true;
  }
  // If something went wrong
  return false;
}