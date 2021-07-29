<?php
session_start();
include '../C/customers.php';
if (isset($_POST["submit_up1"])) {
    // print_r($_POST);
    $customers1 = new Customers;
    $customers1->updateRecordUp();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Diamant | Hôtel | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
      />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>

<body>
    <section>
        <div class="divav">
                <a href="./index.html">
                <img class="logo" src="../Charte Graphic/Logo/logo 1er.png" alt="" width="200px">
            </a>

        </div>
        <div class="titre">
            <p>YOU WELCOM <span><br>Sign in With</span> </p>
        </div>
        <div class="login-content">
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="container">
                    <form id="login" onsubmit="process(event)">
                      <input id="phone" type="tel" name="phone" />
                    </form>
                   </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>yyyy/mm/dd</h5>
                    <input type="text" class="input" name="date_ann" min="1920-01-01" max="2003-12-31">
                </div>
            </div>
            <div class="input-div country">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Country</h5>
                    <input type="text" class="input" name="country">
                    
                </div>
            </div>
            <div class="form-check" style="margin-top: 30px;">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                <label class="form-check-label" for="flexRadioDefault1" style="color: #999;">
                  Male 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked value="Female">
                <label class="form-check-label" for="flexRadioDefault2" style="color: #999;">
                  Female
                </label>
              </div>
              <p style="color: #999; "><input type="checkbox" required name="terms" style="margin-top: 40px;"> I accept the <u style="cursor: pointer;">Terms and Conditions</u></p>
              <a href="./_login.html">
            <input type="submit" name="submit_up1" class="btn" value="Continue">
        </a>
            <a href="./_login.html">Do you already have an account ?</a>
    </section>


    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            background-color: #04202a;
            background-image: url(../fk/ch5.jpg);
        }

        section img {
            background-repeat: no-repeat;
            background-size: cover;
            
            justify-content: center;
        }

        section .logo {
            margin: 0 auto;
            display: flex;
        }
        .titre {
            display: flex;
            justify-content: center;
            color: #b09b7f;
            font-family: 'Prata', sans-serif;
            font-size: 27px;
            line-height: 50px;
            letter-spacing: 6px;
            vertical-align: baseline;
            text-align: center;

        }

        .titre span {
            letter-spacing: 2px;
        }

        .login-content {
            display: grid;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            /* font-weight: 700; */
            /* padding-right: 100px; */
        }

        .input-div {
            position: relative;
            display: grid;
            grid-template-columns: 7% 93%;
            margin: 25px 0;
            padding: 5px 0;
            border-bottom: 2px solid #d9d9d9;
        }

        .input-div.one {
            margin-top: 0;
            position: relative;
            width: 300px;

        }

        .i {
            color: #d9d9d9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .i i {
            transition: .3s;
        }

        .input-div>div {
            position: relative;
            height: 45px;
        }

        .input-div>div>h5 {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
            transition: .3s;
        }

        .input-div:before,
        .input-div:after {
            content: '';
            position: absolute;
            bottom: -2px;
            width: 0%;
            height: 2px;
            background-color: #b09b7f;
            transition: .4s;
        }

        .input-div:before {
            right: 50%;
        }

        .input-div:after {
            left: 50%;
        }

        .input-div.focus:before,
        .input-div.focus:after {
            width: 50%;
        }

        .input-div.focus>div>h5 {
            top: -5px;
            font-size: 15px;
        }

        .input-div.focus>.i>i {
            color: #b09b7f;
        }

        .input-div>div>input {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: none;
            padding: 0.5rem 0.7rem;
            font-size: 1.2rem;
            color: #555;
            font-family: 'Poppins', sans-serif;
        }

        .input-div.pass {
            margin-bottom: 4px;
            margin-top: 0;
        }

        a {
            text-decoration: none;
            margin-top: 40px;
            margin-bottom: 40px;
            color: #999;
            font-size: 0.9rem;
            transition: .3s;
        }

        a:hover {
            color: #b09b7f;
        }

        .btn {
            display: block;
            width: 100%;
            height: 50px;
            outline: none;
            border: none;
            background: #b09b7f;
            background-size: 200%;
            font-size: 0.8rem;
            letter-spacing: 2px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            margin-top: 25px;
            cursor: pointer;
            transition: .5s;
        }

        .btn:hover {
            background-position: right;
        }
        .avec_s p{
            display: flex;
            justify-content: center;
            font-size: 20px;
            color: white;
            font-weight: 100;

        }
        .avec_s img{
            display: flex;
            /* background-color: #b09b7f; */
            width: 28px;
            float: left;
            margin-left: 15px;
            margin-top: 10px;
            fill: white;
        }
        .s_p{
            padding-top: 15px;
            font-size: 12px !important;
            text-transform: none !important;
            
        }
        .s_p:hover{
            font-size: 14px !important;
            transition: 0.6s !important;
        }
        .faceb{
            display: block;
            width: 100%;
            height: 50px;
            outline: none;
            border: none;
            background: #3B5998;
            background-size: 200%;
            font-size: 0.9rem;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }
        .twitt{
            display: block;
            width: 100%;
            height: 50px;
            outline: none;
            border: none;
            background: #DB4437;
            background-size: 200%;
            font-size: 0.9rem;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }
        .sin_up{
            display: block;
            width: 100%;
            height: 50px;
            outline: none;
            border: none;
            background: #b09b7f;
            background-size: 200%;
            font-size: 0.8rem;
            letter-spacing: 2px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }
        #phone{
            background: none;
            border: none;
            padding-left: 90px !important;
            
        }
        #login{
             position: relative !important;
             right: 30px;
             top: 5px;
            /*bottom: 30px !important; */
        }
        .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container{
            position: absolute !important;
            right: 50px !important;
        }
    </style>
    <script>
        const inputs = document.querySelectorAll(".input");


        function addcl() {
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl() {
            let parent = this.parentNode.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }


        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
      </script>
</body>

</html>