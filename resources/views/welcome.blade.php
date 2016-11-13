<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ Session::token() }}">

        <title>Laravel </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script type="text/javascript">
        var url= "<?php echo URL::to('/'); ?>";
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                <input type="text" id="numero_1" required  placeholder="ingresar numero">
                <input type="text" id="numero_2" required placeholder="ingresar numero">
                <input type="button" onclick="sumarNumeros()" value="sumar">

                <div>el resultado es: <span id="resultado"></span></div>
            </div>
        </div>
    </body>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">

    function sumarNumeros(){
        var text1=document.getElementById('numero_1').value;
        var text2=document.getElementById('numero_2').value; 
        $.post('/laravel_suma',{ '_token': $('meta[name=csrf-token]').attr('content'),text1:text1,text2:text2},function(data){
            console.log(data);
        },"json");
        return false;
    }

    </script>
</html>
