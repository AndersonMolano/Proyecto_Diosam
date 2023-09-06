<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/indexlog.css">

</head>

<body>

  <body>
    <header>
      <div class="contenido">
        <ul>
        <li class="nav-item">
                              <a class="nav-link" href="../../index.html">Inicio</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="../DOCS/galeria.html">Galería</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Conócenos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Visítanos</a>
                          </li>
          <li>
            <button type="button">
              <img src="../IMG/User-logo.png" alt="perfil" id="abrirModal" style="width: 50px; height: 50px; border-radius: 50%;">
            </button>
          </li>
        </ul>
      </div>
    </header>
    <div class="contenedor-imagen">
      <img src="../IMG/Fondo-Index.jpg" alt="Fondo" class="Fondo-Index">

    </div>
    <div class="contenedor-logo-texto">
      <img src="../IMG/Logo-Index.jpg" alt="Logo" class="logo">
      <span class="texto">Diosam</span>
    </div>

    <div class="cards">
      <div class="card" style="width: 18rem;">
        <img src="../IMG/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Servicios</h5>
          <p class="card-text">Conoce nuestros servicios y explora el poder de crear tu estilo junto a Diosam.</p>
          <a href="../DOCS/servicios.html" class="btn btn-danger">Bienvenido</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../IMG/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Reservas</h5>
          <p class="card-text">Agenda una cita y preparate para los cambios que tenemos preparados para ti.</p>
          <a href="../DOCS/registrarcita.html" class="btn btn-danger">Bienvenido</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../IMG/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Galeria</h5>
          <p class="card-text">Observa la calidad de nuestros trabajos por si quieres alguna referencia.</p>
          <a href="../DOCS/galeria.html" class="btn btn-danger">Bienvenido</a>
        </div>
      </div>
    </div>


    <script>
      // Obtén el valor del parámetro "email" de la URL
      var params = new URLSearchParams(window.location.search);
      var email = params.get("email");
    </script>

    <!-- Ventana modal, por defecto no visiblel -->
    <div id="ventanaModal" class="modal">
      <div class="modal-content">

        <span class="cerrar">&times;</span>
        <div class="email">
          <?php
          session_start();
          echo $_SESSION['email_user'];
          ?>
        </div>
<img src="../IMG/User-logo.png" alt="logo" class="user_logo">

        <div class="nombre">  
          <?php
          echo'!Hola, ';
          echo $_SESSION[ 'name_user'];
          echo'¡';
          ?>
       <form method="post" action="../../controladores/cerrar_sesion.php" class="cerrar_sesion">
    <button type="submit" class="cerrar_sesion">Cerrar Sesión</button>
</form>

      </div>

    </div>

    <script>
      // Ventana modal
      var modal = document.getElementById("ventanaModal");

      // Botón que abre el modal
      var boton = document.getElementById("abrirModal");

      // Hace referencia al elemento <span> que tiene la X que cierra la ventana
      var span = document.getElementsByClassName("cerrar")[0];


      // Cuando el usuario hace clic en el botón, se abre la ventana
      boton.addEventListener("click", function() {
        modal.style.display = "block";
      });

      // Si el usuario hace clic en la x, la ventana se cierra
      span.addEventListener("click", function() {
        modal.style.display = "none";
      });

      // Si el usuario hace clic fuera de la ventana, se cierra.
      window.addEventListener("click", function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      });
    </script>

  </body>

</html>