<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FALE CONOSCO</title>
    <link href="../css/default.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/css//bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .container{
            padding-top:100px;
        }

    </style>
</head>
<body>
    <?php include "menu.php";
      include "footer.php";?>
      

        <div class="container">
        <form>
    <div class="mb-3 text-center">
      <h1 >Fale conosco</h1>
    </div>
    <div class="mb-3 col-10 ">
        <labe>Nome:</label>
        <input class="form-control col-10" type="search"> 
    </div>
    <div class="mb-3 col-10">
        <label >Mensagem:</label>
        <textarea class="form-control col-10" type="text" height="800"></textarea>
    </div> 
    <div class="d-grid gap-2 d-md-flex justify-content-md-end col-10">
        <input  type="button" class="btn btn-outline-primary  col-4" value="enviar">
    </div>
    </form>
    </div>
</body>
</html>