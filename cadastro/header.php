<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Document</title>
    <header style="background-color: #17222D;">
        <nav class="estilo">
            <div class="nav-wrapper">
                <!--  menu para desktop -->
                <ul class="menu-desktop flex-end " style="width:auto;height:50px;background-color:#17222D;">
                    <li style="padding: 2px 20px; width:auto;"><a href="index.php" style="color: #fff!important; 
                    ">Listar</a></li>
                    <li style="padding: 2px 20px;width:auto;"><a href="adicionar.php" style="color: #fff!important; 
                    ">Cadastro</a></li>
                    
                </ul>
                <!-- menu para dispositivos moveis -->
                <label class="estilo2" for="check" style="z-index: 2;position: relative;">&#8801</label>
                <input type="checkbox" id="check">
                <ul class="menu-movel" style="z-index: 2;position: relative;">
                    <li><a href="index.php">Listar</a></li>
                    <li><a href="adicionar.php">Cadastro</a></li>
                </ul>
            </div>
        </nav>
    </header>
</head>
<body>
    
