<?php

function sayHello()
{
    return "Hello World from PHP!";
}

?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
            crossorigin="anonymous">

        <link href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">

        <title>Pinnwand</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f4cb42;">
            <a class="navbar-brand" href="#">
                <img src="https://cdn.icon-icons.com/icons2/877/PNG/512/inclinated-pinboard_icon-icons.com_68395.png" width="30" height="30"
                    class="d-inline-block align-top" alt=""> Pinnwand
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./login.php">Login
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
            </div>
        </nav>

        <div class="noteSection">
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <a href="#">
                                <h2>Title #1</h2>
                                <p>Text Content #1</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h2>Title #2</h2>
                                <p>Text Content #2</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h2>Hellyeah</h2>
                                <p>Text Content #3</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h2>Boom!</h2>
                                <p>Text Content #4</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h2>Last one</h2>
                                <p>Text Content #5</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"></script>
    </body>

    </html>