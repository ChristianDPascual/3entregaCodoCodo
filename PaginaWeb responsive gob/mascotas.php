<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="Formstyle.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
      <div>
        <img class="imagenCabecera" src="imagenes/fondo, logo, cabecera/cabeceraFinal.png" style="background-color: #004AAD">
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004AAD">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Nosotros</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Ubicacion</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categorias
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Perro</a></li>
                          <li><a class="dropdown-item" href="#">Gato</a></li>
                          <li><a class="dropdown-item" href="#">Otras mascotas</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Qué estas buscando?" aria-label="Search">
                      <button class="btn btn-outline" style ="background-color: aliceblue;"type="submit">Buscar
                      </button>
                    </form>
                  </div>
                </div>
      </nav>
    </header>

    <div class="fondo">
    <form name="method" value="alta" method="post" action="php/index.php">
    <div class="formulario">
    <div class="formularioBlock">
            <input type="text"  class="formularioInput" name="nombre" id="nombre" placeholder=" Nombre de la mascota" required>
        </div>

        <div class="formularioBlock">
            <select name="tipo" id ="tipo" class="formularioInput" required>
                <option selected="true" disabled="disabled"> Tipo de mascota</option>
                <option value="perro">perro</option>
                <option value="gato">gato</option>
                <option value="otro">otros</option>
            </select>
        </div>

        <div class="formularioBlock">
            <input type="text"  class="formularioInput" name="raza" id="raza" placeholder=" raza" required>
        </div>

        <div class="formularioBlock">
            <input type="number" class="formularioInput" placeholder=" edad" name="edad" id="edad" min="0" required>
        </div>

        <div class="formularioBlock">
            <input type="text"  class="formularioInput" name="dniDuenio" id="dniDuenio" placeholder=" Documento del dueño" required>
        </div>

        <div class="formularioBlock">
            <div class="miniContainer">
               <button class= "btn btn-primary"  value="alta" name="accion" id="btnAgegrar" type="submit">Agregar</button>
            </div>
        </div>
        <div class="formularioBlock">
            <div class="miniContainer">
                <button class= "btn btn-success" value="buscar" name="accion" id="btnBuscar" type="submit">Buscar</button>
                <input type="text"  class="formularioInput" name="dniBuscar" id="dniBuscar" placeholder=" dni dueñio">
            </div>
        </div>    
            <div class="miniContainer">
                <button class= "btn btn-danger" value="borrar" name="accion" id="btnBorrar" type="submit">Borrar</button>
                <input type="text"  class="formularioInput" name="dniBorrar" id="dniBorrar" placeholder=" dni dueñio">
            </div>
            </div>
        </div>
        </div>
    </form>
</div>

<footer class="piePagina">
    <div class="grupo">
      <div class="grupo div:nth-child(1)">
        <img src="imagenes/fondo, logo, cabecera/logoPetshop.png" alt="logoPetShop" class="figure">
      </div>
      <div class="grupo div:nth-child(1)">
        <section>
        <h2 class="grupoh2">SOBRE NOSOTROS</h2>
        <p class="grupop"> Somos un negocio familiar con la mision de ayudar y acompañar el crecimiento de las mascotas 
          que consideramos miembros importanes de cada la familia, las cuales nos brindan amor y alegria.<br>
          Por esa razon tenemos una amplia variedad de alimentos desde tradicionales, hasta mas especificos
          tales como los renales, de control de peso, para chachorros o en edad mas avanzada para que puedas 
          darle la mejor calidad de vida a tu mascota.
        </p>
      </section>
      </div>
    </div>
  </footer>
</body>
</html>