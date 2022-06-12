<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Crear posts</title>
    <link rel="stylesheet" href="/css/style.css">


</head>

<body>
    
    
    
    <div class="containerform">
        
        <form action="/posts" method="POST">
            @csrf
            <div class="mb-3">
                <label>Título</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Resumen</label>
                <textarea type="text" class="form-control" name="excerpt" rows="6"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="content">Contenido</label>
                <textarea type="text" class="form-control" name="content" rows="6"></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
