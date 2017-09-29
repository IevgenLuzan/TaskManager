<!DOCTYPE html>
<html lang="en">
<head>
    <title>TASKER</title>

    <!-- CSS и JavaScript -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="fonts/">
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/individual.css">
</head>

<body>
<div class="container font">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href=""><p id="logo">TASKER</p></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/home">
                        <div id="menu_el">Главная</div>
                    </a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">
                        <div id="menu_el"><span class="glyphicon glyphicon-log-in"></span> Выйти</div>
                    </a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</div>

</body>
</html>

