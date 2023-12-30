<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /* PRIMERA PARTE */
        /* header{
            width: 300px;
            height: 200px;
            background-color: aqua;
            margin: 20px;
            border: 5px solid yellow;
            padding: 20px;
        }

        #logo{
            width: 50px;
            height: 50px;
            background: green;
            border: 5px solid white;
            border-radius: 100%
        }

        .grupo{
            width: 200px;
            height: 200px;
            margin: 20px;
        }

        #cl{
            background: tomato;
        }

        #c2{
            background: #054AA1
        }

        #cl{
            background: tomato;;
        } */



        /* PARTE 2 */

        /* selector universal */
        *{
            margin: 0;
            padding: 0;
            list-style: none;
        }

        header{
            position: relative;
            width: 1000px;
            height: 120px;
            background: #444;
            margin: 20px auto;
            /* margin: 20px 30px; dos coordenadas*/ 
        }

        /* POSICION absolute INTERNA NOS PERMITIRA UBICAR UNAA CAJA INTERNA DENTRO DE UNA 
        CAJA PRINCIPAL */
        #logo{
            position: absolute;
            width: 200px;
            height: 60px;
            background: #ccc;
            top: 30px;
            left: 30px;
            /* right: 0; */
            /* bottom: 0; */
            /* margin: 20px 30px; dos coordenadas*/ 
        }

        .redes{
            position: absolute;
            width: 42px;
            height: 42px;
            background: #ccc;
            border-radius: 100%;
        }

        #icono1{
            top: 42px;
            right: 120px;
        }
        #icono2{
            top: 42px;
            right: 71px;
        }
        #icono3{
            top: 42px;
            right: 19px;
        }

        nav{
            position: relative;
            width: 1000px;
            height: 48px;
            background: #aaa;
            /* margin: auto; */
            margin: auto;
        }

        .boton{
            float: left;
            width: 196px;
            height: 48px;
            background: #333;
            margin: 0px 2px;
        }

        .top{
            position: relative;
            width: 1000px;
            height: 192px;
            background: #888;
            /* margin: auto; */
            margin: 20px auto;
        }

        section{
            position: relative;
            width: 1000px;
            height: 453px;
            background: #aaa;
            /* margin: auto; */
            margin: auto;
        }

        footer{
            position: relative;
            width: 1000px;
            height: 70px;
            background: #aaa;
            /* margin: auto; */
            margin: 20px auto;
        }

        /* SELECCION EN RUTA */
        #top ul li{

        }

    </style>
</head>
<body>

    {{-- PRIMERA PARTE --}}
    {{-- <header>
        <div id="logo">
            logotipo
        </div>
    </header>

    <div id="cl" class="grupo"></div>
    <div id="cl" class="grupo"></div>
    <div id="cl" class="grupo"></div> --}}

    <header>
        <div id="logo"></div>

        <div id="icono1" class="redes"></div>
        <div id="icono2" class="redes"></div>
        <div id="icono3" class="redes"></div>
    </header>

    <nav>
        <ul>
            <li class="boton"></li>
            <li class="boton"></li>
            <li class="boton"></li>
            <li class="boton"></li>
            <li class="boton"></li>
        </ul>
    </nav>

    <div class="top">
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <section>
        <aside id="izq"></aside>
        <article></article>
        <aside id="der"></aside>
    </section>

    <footer>

    </footer>


    
</body>
</html>