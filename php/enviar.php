<?php

date_default_timezone_set('America/Argentina/Buenos_Aires'); //esta función nos ajusta la hora correcta para cada zona


//Una variable en php se define con el signo de pesos y luego el nombre que quieras ponerle


//Como usamos el método post en el formulario para recibir esos datos usamos: $_POST
//signo de pesos, guión bajo y el nombre del método. Si usaramos get sería: $_GET
//seguido de corchetes y adentro el string que recibimos entonces si recibimos el valor "nombre" del formulario seria:
    // $_POST['nombre'];

    //??'' quiere decir que si no viene nada en la variable, que ponga lo de las comillas.
    //ejemplo la persona envía una variable nombre en el método post pero viene vacío, lo manejamos así:
    //$_POST['nombre']??'';
    //digamos que queremos que si no viene nada ponerle un nombre nosotros entonces sería así:
    //$_POST['nombre']??'Gerardo';
    //esto quiere decir que si la persona no envía un nombre, por defecto el nombre será Gerardo.

    
$nombre = $_POST['nombre']??'- No puso nombre'; //$nombre  seria la variable
$mail = $_POST['correo']??'- No puso correo';
$celular = $_POST['celular']??'- No puso celular';
$mensajeRecibido = $_POST['mensaje']??'- No puso el mensaje';

// 'hola '+persona; en javascript

//en php: 'hola'.$persona;
//en php con post: 'hola'.$_POST['nombre'];

//texto entre dos variables en javascript:
// persona+' bienvenido tu correo es '+correo; //juan bienvenido tu correo es correo@gmail.com

//en php seria así:
// $persona.' bienvenido tu correo es '.$correo esto daría: juan bienvenido tu correo es correo@gmail.com
//en php con post:
//$_POST['nombre'].' bienvenid.. '.$_POST['correo'];

// $mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
// $mensaje .= "Su mail es: " . $mail . "\r\n";
// $mensaje .= "Su celular es: " . $celular . "\r\n";
// $mensaje .= "Enviado el  " . date(d/m/Y, time());

//date es una funcion de php que te da la fecha
//time te da la hora

$mensaje = '';

//$mensaje .= :es lo mismo que poner =>
//$mensaje = $mensaje.'algo';
//een javascript era: variable+=1; //esto le sumaba a la variable uno, es el abreviado de: variable = variable+1;
$mensaje .= 'Este mensaje fue enviado por: '.$nombre.'<br>';
$mensaje .= 'Su correo es: '.$mail.'<br>';
$mensaje .= 'Su celular es: '.$celular.'<br>';
$mensaje .= 'El mensaje es: '.$mensajeRecibido.'<br>';
$mensaje .= "Enviado el  ".date('d/m/Y h:i:s');


// date_default_timezone_set('Europe/Madrid');
// echo $mensaje;


$para = 'PatriciaDev2023@hotmail.com';
$asunto = 'Consulta de presupuesto, PatriciaDev.com';

$header = 'From: consultas@patriciadev.com';
$header .= 'To: patriciadev2023@gmail.com';


//utf8_decode lo que hace es que transforma los caracteres especiales del texto, en algo legible
//porque sino si pones un acento o una ñ, el lenguaje no lo entiende y no lo escribe correctamente.

//este if enviaría el correo
// if(mail($para, $asunto, utf8_decode($mensaje), $header)){
if(mail($para, $asunto, utf8_decode($mensaje), $header)){
    session_start();

    //header es para enviar al usuario a alguna parte de la página dentro de esta función iría el "location:" y luego a donde irá
    //para crear una variable global, que se pueda usar en cualquier parte de la página se usa el $_SESSION
    //este session durará siempre y cuando el usuario haya iniciado sesión.
    
    //el usuario inicia sesión con la función: session_start();

    $_SESSION['mensaje'] = 'El correo se envío correctamente';

    header('location:../#contacto'); //esto vuelve una carpeta para atras y como no especifiqué un archivo, va a buscar el index
}else{
    echo 'no se envío el mensaje';
}
// header('')

 ?>