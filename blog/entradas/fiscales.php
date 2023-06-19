<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Natural</title>
    <!-- Box-icon -->
    <link rel="shortcut icon" href="../../blog/images/perro.png">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../css/entradas.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
</head>
<body class="color">
    <div class="contenedor">
            <section class="titulo">
                <div class="titulo_2">
                    <h2 class="titulo_principal">Blog de Marketing Digital</h2>
                    <span class="subtitle">Una buena opcion sobre como aprender</span>
                </div>
            </section>

            <section class="about container" id="about">
                <div class="contentBx">
                    <h2 class="titleText">¿Quieres aprender ?</h2>
                    <p class="title-text">
                        Los puntos fuertes del marketing digital son su capacidad para llegar a un público amplio y específico de manera efectiva y medible, crear interacciones personalizadas y relevantes con los consumidores, 
                        y ser rentable en comparación con el marketing tradicional. <br>
                        <br>Si quieres aprender más, solo debes iniciar sesion....
                    </p>
                </div>
            </section>

            
            <div class="comentarios">
                <!-- Inicia comentarios -->
                <p>Dejanos tu comentario</p>
                <form action="./../../php/comentarios.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"  name="nombre_publicador">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" name="apellidos_publicador">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="usuario@ejemplo.com" name="correo_publicador">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Escribe tu comentario</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cont_comentario"></textarea>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit" name="enviar">Enviar !!</button>
                    </div>
                </form>
            </div>


            <div class="ver_comentarios">
                <p>Comentarios</p>

            </div>

    </div>
    <!--Inicia entradas de blog en forma de listas-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
    <script src="../../js/regresa.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"></script>
</body>
</html>