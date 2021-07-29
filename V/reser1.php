<?php
session_start();
include '../C/customers.php';
if (isset($_POST["submitt"])) {
    // print_r($_POST);
    $customers1 = new Customers;
    $customers1->updateRecord();
}

// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Diamant | Hôtel</title>
    <link rel="shortcut icon" href="./Charte Graphic/Logo/logo icon.png">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background-color: #04202a; height: 55px !important; box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.3);">

        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="margin: 0 auto;">
                    <a class="nav-link" href="./index.html">Home</a>
                    <a class="nav-link" href="#">Gallerie</a>
                    <a class="nav-link active" style="color: white !important;" aria-current="page"
                        href="./reser.html">Booking</a>
                    <a class="nav-link" href="#">About Us</a>
                </div>
            </div>
        </div>
    </nav>
    <img src="../fk/fdt.png"
        style="display: flex; position: absolute; top: 60px;  right: 150px; opacity: 70%; z-index: -1;">
    <div class="interface1">
        <img src="../Charte Graphic/Logo/logo 1er.png" style="position: relative; display: flex; margin: 0 auto;"
            width="260px" alt="">
        <p class="t1">Luxurious Room Collection</p>
        <p class="t2"><span>Explore</span> Our Casino & Hotel</p>
        <table style="width:20%">
            <tr>
                <th><img class="icon-active" src="../fk/step1.png" alt="step1"><div class="linee-active"></div></th>
                <th><img class="icon-active" src="../fk/step2.png" alt="step2"><div class="linee-active"></div></th>
                <th><img class="icon" src="../fk/step3.png" alt="step3"><div class="linee"></div></th>
                <th><img class="icon" src="../fk/step4.png" alt="step4"><div class="linee"></div></th>
            </tr>
        </table>
        <h1 class="tit_t">CHOOSE YOUR ROOM</h1>
        <form method="POST" action="">

            <div class="barr_res">
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name="selectCh" onchange="populate()" >
                        <option selected>Choisie le type de Chamber</option>
                        <option value="Simple" id="op1">Chamber Simple</option>
                        <option value="Double" id="op2">Chamber Double</option>
                    </select>
                    <div id="affichage"></div>

                    <button type="submit" name="submitt" onclick="type_ch()">Next Step</button>


                </div>
                
            </div>
        </form>
        
        <style>
            .barr_res {
                width: 100%;
                height: auto;
                background-color: rgb(177, 177, 177);
                margin-top: 100px;
                align-content: center;
            }
            .linee{
                height: 1px;
                background-color: white;
                width: auto;
                margin-top: 15px;
            }
            .linee-active{
                background-color: #b09b7f;
                height: 2px;
                width: auto;
                margin-top: 15px;
            }
            .inputt {
                display: flex;
                flex-direction: row;
            }

            .inputt input {

                width: 200px;


            }

            input {
                width: 200px !important;
            }

            table {
                margin-top: 40px;
            }

            table tr th img {
                width: 50px;
                gap: 20px;
                color: white;

            }

            .icon {
                opacity: 50%;
                cursor: pointer;
            }

            .icon:hover {
                opacity: 100%;

            }

            .tit_t {
                color: white;
                font-family: 'Prata', sans-serif;
                font-size: 25px;
                letter-spacing: 2px;
                margin-top: 50px;
            }

            button {
                height: 53px;
                width: 200px;
                margin-top: 30px;
                background-color: black;
                color: white;
                border: none;
            }
            button:hover{
                border: 2px solid black;
                background-color: white;
                color: black;
            }
            .form-select{
                border: 2px solid #b09b7f !important;
                color: black;
                background-color: #04202a00 !important;
                margin-right: 10px;
            }
            .input-group{
                display: flex;
                justify-content: center;
            }
            .input-group>.form-control,
            .input-group>.form-select {
                flex: none !important;
                width: 300px;
                margin-top: 30px;

            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
        </script>
        <script src="./reser1.js"></script>
        <script src="./price.js"></script>

</body>

</html>