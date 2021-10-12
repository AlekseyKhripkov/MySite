<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/View/css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>MVC Framework</title>
</head>

<body>



<div class="jumbotron">
    <h1 class="display-4">MVC Framework</h1>
    <p class="lead">Model-View-Controller (MVC, «Модель-Представление-Контроллер», «Модель-Вид-Контроллер») — схема разделения данных приложения, и управляющей логики на три отдельных компонента: модель, представление и контроллер — таким образом, что модификация каждого компонента может осуществляться независимо</p>
    <hr class="my-4">
    <p>Пример сайта построенного по данному принципу</p>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><b>MVC </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/index/calculator"><b>Calculator </b><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><b>Info </b><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>GameMenu</b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/seaBattle/index">Sea Battle</a>
                        <a class="dropdown-item" href="/saper/index">Super Saper</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Можно выбрать игру</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

<div class="shadow p-3 mb-5 bg-white rounded">
<div class="content">
    <?php include ($contentPage); ?>
</div>
</div>

<!--	<div class="main-container">-->
<!--		<div class="menu">-->
<!--			<ul>-->
<!--                <li><a href="/" class="badge badge-secondary">MAIN</a></li>-->
<!--                <li><a href="/index/calculator" class="badge badge-secondary" >Calculator</a></li>-->
<!--                <li><a href="/seaBattle/index" class="badge badge-secondary" >Sea Battle</a></li>-->
<!--                <li><a href="/saper/index" class="badge badge-secondary" >Saper</a></li>-->
<!--				<li><b class="badge badge-secondary">mvc (header)</b></li>-->
<!--			</ul>-->
<!--		</div>-->
<!--        <div class="content">-->
<!--            --><?php //include ($contentPage); ?>
<!--        </div>-->
<!--		<div class="menu">-->
<!--			<ul>-->
<!--				<li><b>mvc (footer)</b></li>-->
<!--			</ul>-->
<!--		</div>-->
<!--    </div>-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
