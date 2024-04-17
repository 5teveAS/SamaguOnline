<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/world-logo.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/public-page.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/general-styles.css')}}">


    <title>Página informativa</title>
</head>
<div class="container">
    <body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <header>

            <!--Para que siempre lleve a la pagina principal-->


            <div class="barra">
                <img src="assets/images/samagu-logo-img.png" width="300" alt="samagu-logo" class="samagu-logo">

{{--                   <nav class="navegacion margin-50">--}}
{{--                      <a href="nosotros.html">Nosotros</a>--}}
{{--                      <a href="anuncios.html">Anuncios</a>--}}
{{--                      <a href="blog.html">Blog</a>--}}
{{--                      <a href="contacto.html">Contacto</a>--}}
{{--                  </nav>--}}

            </div> <!--.barra-->


        </header>


        <main class="seccion-principal">


            <h1 class="text-center" style="color:#2f90ed">Sobre SAMAGU Rodriguez S.A.</h1>
            <div class="seccion-1">
                <p>
                    Somos una empresa costarricense con amplia experiencia en el campo de la consultoría y construcción.
                    Nuestra experiencia de más de 23 años en el campo de la construcción nos ha permitido adaptarnos a un
                    mercado cambiante que evoluciona día a día presentando nuevos desafíos, implementando nuevos servicios
                    especializados de consultoría.
                </p>
                <img src="assets/images/Samagu-Photo1.jpg" class="imagenes" alt="samagu-logo" class="samagu-photo1">
            </div>


            <div class="seccion-2 mb-5">
                <p>¿A qué nos dedicamos?
                    A lo largo de nuestra historia nos hemos enfocado principalmente al diseño y construcción de obras civiles,
                    específicamente a la construcción de soluciones residenciales para la clase media, sin embargo en los últimos
                    13 años hemos diversificado nuestra cartera de clientes logrando ejecutar con exito diferentes contratos de alta complejidad.</p>

            </div>

            <div class="w3-content w3-display-container">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img1.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img2.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img3.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img4.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img5.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img6.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img7.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img8.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img9.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img10.jpeg')}}" style="width:100%; max-height: 600px">
                <img class="mySlides" src="{{asset('assets/images/samaguImages/img11.jpeg')}}" style="width:100%; max-height: 600px">

                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
            <div class="seccion-3">
                <div>
                    <h2 style="color:#2f90ed" class="mb-4">¡Contáctenos!</h2>
                    <p class="text-center">Es para nosotros un gusto servirle. Nos caracterizamos por generar vínculos comerciales en los cuales los clientes son nuestros amigos.</p>
                    <a href="contact-page" class="btn btn-primary shadow btn-xs sharp mr-1 margin-50 btn-iniciarSesion">Contactar ahora<i class="fadeIn animated bx"></i></a>
                </div>
                <div>

                </div>
            </div>
    </main>

    <footer class="footer">
        <div class="info-footer">
            <ul>
                <li>Constructora SAMAGU S.A.</li>
                <li>heredia</li>
                <li>Costa Rica</li>
                <li>Teléfono: +506 22610570</li>
                <li>Fax: +506 22627713</li>
                <li>Correo: info@constructorasamagu.com</li>
            </ul>

            <ul>
                <li>Copyright 2021 Constructora Samagú S.A</li>
                <li>Todos los derechos Reservados 2021 &copy;</li>
            </ul>
        </div>
    </footer>
    <script src="build/js/bundle.min.js"></script>
</div>
<!--end wrapper-->

<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>
{{--<script type="text/javascript">--}}
{{--    var counter = 1;--}}
{{--    setInterval(function(){--}}
{{--        document.getElementById('radio' + counter).checked = true;--}}
{{--        counter++;--}}
{{--        if(counter > 4){--}}
{{--            counter = 1;--}}
{{--        }--}}
{{--    }, 5000);--}}
{{--</script>--}}

<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
</body>
</div>


</html>
