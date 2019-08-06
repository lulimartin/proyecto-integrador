<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

<!-- Aca esta el link al CSS -->
        <link rel="stylesheet" href="style/stylesheet_contact.css">
<!-- Aca esta el link al CSS -->

        <title>Contact | SportShoes</title>
</head>
    <body>
        <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <a class="navbar-brand"><img src="style/logo.jpg"></a>
            <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="nav">
                <ul class="navbar-nav">
                    <li class="nav-item" >
                        <a class="nav-link text-light font-weight-bold px-3" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item dropdown" data-toggle="dropdown">
                        <a class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">PRODUCTOS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="home.html">Hombre</a>
                            <a class="dropdown-item" href="home.html">Mujer</a>
                            <a class="dropdown-item" href="home.html">Niño</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light font-weight-bold px-3" href="contact.html">CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light font-weight-bold px-3" href="discounts.html">PROMOCIONES</a>
                    </li>
                </ul>
                <form class="form-inline ml-3">
                    <div class="input-group">
                        <input type="text" class="form-control " placeholder="Buscar" >
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </nav>
    </header>

    <!-- Aca termina el header! -->

           <div class="contact_general_wrapper">
              <div class="contact_title">
                <h3>Necesitas ayuda? Contactanos!</h3>
              </div>
              <div class="contact_container">
                <form class="contacto_form" action="contact_confirmation.html">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Motivo de contacto</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Envíos</option>
                      <option>Pagos</option>
                      <option>Devoluciones</option>
                      <option>Reglamos</option>
                      <option>Otros</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Adjuntar archivos</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <button type="submit" name="button">Enviar!</button>

                  </form>

                </div>
              </div>

<!-- Aca termina el body -->






  <!-- <footer>
      <div class="footer">
        <div class="footer_1">
          <div class="footer_11">
            <h4>La empresa</h4>
            <ul>
              <li><a href="">Sobre nosotros</a></li>
              <li><a href="">Política de privacidad</a></li>
              <li><a href="">Terminos y condiciones</a></li>
            </ul>
          </div>
          <div class="footer_11" id="medio">
            <h4>Ayuda</h4>
            <ul>
              <li><a href=""><ion-icon name="mail" role="img" class="md hydrated" aria-label="mail"></ion-icon>Contactanos!</a></li>
              <li><a href="faq.html"><ion-icon name="help" role="img" class="md hydrated" aria-label="help"></ion-icon>Preguntas frecuentes</a></li>
            </ul>
          </div>
          <div class="footer_11">
            <h4>Atención al cliente</h4>
            <ul>
              <li><ion-icon name="call" role="img" class="md hydrated" aria-label="call"></ion-icon>+54 314 316 2969</li>
              <li> Lunes a viernes</li>
              <li> De 8:00 a 20:00 hs</li>
            </ul>
          </div>
      </div>
      <div class="footer_2">
        <div class="afip">
          <a href="http://www.afip.gob.ar/sitio/externos/default.asp" target="_blank"><img src="img/afip.png" alt="Codigo QR AFIP"></a>
        </div>
      </div>
      <div class="footer_3">
        <div class="copyright">
          <p>SportShoes© Copyright 2019. Todos los derechos reservados.</p>
        </div>
      </div>
      <div class="footer_4">
        <div class="dh">
          <a href="https://www.digitalhouse.com/" target="_blank"><img src="img/logodh.png" alt=""></a>
        </div>
      </div>
    </div>
</footer> -->

    </body>


</html>
