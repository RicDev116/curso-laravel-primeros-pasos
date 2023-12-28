<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>
</head>
<body>
    <h1><?php echo $msg ?></h1>
    <h1><?= $msg?></h1>

    {{-- //LA MENERA DE BLADE --}}
    <h2>{{$msg}}</h2>
</body>
</html>