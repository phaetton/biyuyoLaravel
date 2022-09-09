<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/mentoradosbusiness-fe39b.appspot.com/o/Recursos%2FLogos%2Flogopixel.jpeg?alt=media&token=ed141481-d3bd-474b-a869-113043fcbc3b">
  <title>Negocios Nicaragua</title>
  <!--CDN font awesome-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!--CDN bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/Css/stylo.css">
  <!--CDN Para corusel-->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

  <link rel="stylesheet" href="./asset/Css/home.css">
</head>
<body>
<header class="banner">
      <nav class="navbar navbar-expand-lg navbar-dark px-3" style="background-color: transparent;">
        <div class="container-fluid">
          <img class="logo mt-2"
            src="https://firebasestorage.googleapis.com/v0/b/mentoradosbusiness-fe39b.appspot.com/o/Recursos%2FLogos%2Flogo-mentors.png?alt=media&token=7be656a7-0923-47af-bd79-01c5597d9089"
            alt="logo Mentors" width="16%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="./contacto.php">Contáctanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./acercade.php">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="text-center">
        <h1 class="text-white">Negocios Mentorados Nicaragua</h1>
        <div class="">
          <div class="col-8 offset-2">
            <div class="input-group input-group-lg">
              <!--select Yanilt y Miguel-->
              <div class="select">
                <select name='tiponegocio' id='tiponegocio'>
                  <option  value='1' selected>Todo</option>
                  <optgroup label="Servicios">
                    <option value='2'>Veterinaria</option>
                    <option value='3'>Barberia</option>
                    <option value='4'>Bordados</option>
                    <option value='5'>Artesanías</option>
                  </optgroup>
                  <optgroup label="Productos">
                    <option value='6'>Alimentos</option>
                    <option value='7'>Ropa</option>
                    <option value='8'>Variedades</option>
                  </optgroup>
                </select>
              </div>
              <input type="text" class="form-control buscador" placeholder="Buscar" aria-label="Buscar..." aria-describedby="button-addon2" id="search">
              <button class="btn btn-light" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
            <div class="col-md-3" id="result"> 
            </div>
          </div>
        </div>
      </div>
</header>
<!--Fin Header-->


