 <?php

 error_reporting(0);
    $psecreta = $_POST['psecreta'];

    $con = mysql_connect('localhost','root','');
    mysql_select_db('consejo',$con);
    $sql = "SELECT * FROM Administrador WHERE psecreta='$psecreta'";
    $res = mysql_query($sql,$con);
    while($row=mysql_fetch_array($res)){
        $usuario = $row[1];
        $clave = $row[2];
        $nombre = $row[3];
        $secreta = $row[4];
    }

    if($psecreta = $secreta){
    echo '<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Generación y Registro de Costancia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
    <div class="container">
            <!-- Codrops top bar -->
           
            <br><br><br><br><br>
            <section>               
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                                <h1>¡Correcto '.$nombre.'! tus datos son los siguientes</h1> 
                                <label for="password" class="youpasswd">Tu nombre de usuario es: '.$usuario.'</label><br><br>
                                <label for="password" class="youpasswd">Tu clave de acceso es: '.$clave.'</label>
                                <p class="login button"> 
                                    <a href="admin.html"><input type="submit" value="Ingresar de nuevo"/> </a>
                                </p>
                        </div>
            </section>
        </div>


';}else{
        echo '<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Generación y Registro de Costancia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
    <div class="container">
            <!-- Codrops top bar -->
           
            <br><br><br><br><br>
            <section>               
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                                <h1>Respuesta secreta incorrecta</h1> 
                                <p class="login button"> 
                                    <a href="admin.html#toregister"><input type="submit" value="Intentar de nuevo"/> </a>
                                </p>
                        </div>
            </section>
        </div>


';}
    

?>