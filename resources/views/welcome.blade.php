<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet' type='text/css'>
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
            font-family: sans-serif;
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
            font-family: 'Kaushan Script', cursive;
            font-size: 50px;
            text-align: center;
            line-height: 60px;
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
            text-align: center;
            line-height: 42px;
            color: white;
        }

        #icono1{
            top: 42px;
            right: 120px;
            background: green;
        }
        #icono2{
            top: 42px;
            right: 71px;
            background: blue;
        }
        #icono3{
            top: 42px;
            right: 19px;
            background: red;
        }

        nav{
            position: relative;
            width: 1000px;
            height: 48px;
            /* margin: auto; */
            margin: auto;
        }

        .boton{
            float: left;
            width: 196px;
            height: 48px;
            background: rgba(100, 0, 255, 1);
            margin: 0px 2px;
            font-family: 'Kaushan Script',cursive;
            color: white;
            text-align: center;
            line-height: 48px;
        }

        .top{
            position: relative;
            width: 1000px;
            height: 192px;
            /* background: red; */
            /* margin: auto; */
            margin: 20px auto;
        }

        /* SELECCION EN RUTA */
        .top ul{
            width: 1010px;
            height: 192px;
            /* background: green; */
        }

        .top ul li{
            float: left;
            width: 326px;
            height: 192px;
            background: #999;
            margin-right: 10px;
        }

        section{
            position: relative;
            width: 1000px;
            height: 453px;
            background: #aaa;
            /* margin: auto; */
            margin: auto;
        }

        aside#izq{
            position: absolute;
            left: 0;
            top: 0;
            width: 200px;
            height: 453px;
            background: #333;
        }

        aside#der{
            position: absolute;
            right: 0px;
            top: 0;
            width: 200px;
            height: 453px;
            background: #333;
        }

        article{
            position: absolute;
            right: 200px;
            top: 0;
            width: 600px;
            height: 453px;
            background:#888;
        }


        footer{
            position: relative;
            width: 1000px;
            height: 70px;
            background: #aaa;
            /* margin: auto; */
            margin: 20px auto;
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
        <div id="logo">Logotipo</div>

        <div id="icono1" class="redes">x</div>
        <div id="icono2" class="redes">x</div>
        <div id="icono3" class="redes">x</div>
    </header>

    <nav>
        <ul>
            <li class="boton">Boton 1</li>
            <li class="boton">Boton 2</li> 
            <li class="boton">Boton 3</li>
            <li class="boton">Boton 4</li>
            <li class="boton">Boton 5</li>
        </ul>
    </nav>

    <div class="top">
        <ul>
            <li>
                <img src="img01.jpg" width="100">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetu</p>
            </li>
            <li>
                <img src="img02.jpg" width="100">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetu</p>
            </li>
            <li>
                <img src="img03.jpg" width="100">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetu</p>
            </li>
        </ul>
    </div>

    <section>
        <aside id="izq"></aside>
        <article>
            <h1>Lorem impusm</h1>
            <p><img src="foto.jpg" width="250">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut assumenda 
                magnam minima rem autem rerum quibusdam neque! At odit dolorem voluptatibus labore voluptates! Nostrum, architecto?
                 Similique vel quis nam! 
            </p>

            <br>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur dolor provident nobis sapiente, dignissimos 
                corrupti, dolores consequatur, numquam aspernatur illo ipsam tempora. Eligendi sapiente repellendus illum 
                expedita quidem excepturi atque.
            </p>
        </article>
        <aside id="der"></aside>
    </section>

    <footer>
        &copy; Todos los derechos reservados
    </footer>


    
</body>
</html>