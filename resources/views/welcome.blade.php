<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistema de ventas para gestionar compras, ventas
    clientes, proveedores, productos, categorías, etc. Ideal para pequeños y medianos negocios que deesen 
    automatizar sus procesos y tener a la mano cualquier información sobre su negocio" />
    <meta name="author" content="SakCode" />
    <title>Sistema de venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!--Barra de navegación--->
    <nav class="navbar navbar-expand-md bg-body-secondary">
        <div class="container-fluid">
            <!---Marca navegación-->
            <a class="navbar-brand" href="{{route('panel')}}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Sistema de venta
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!----Lista de opciones del menú-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('panel')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                </ul>

                <form class="d-flex" action="{{route('login')}}" method="get">
                    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                </form>

            </div>
        </div>
    </nav>


    <section class="hero text-center">
        <div class="container">
            <h1>Sistema de Ventas Web</h1>
            <p>Gestiona tus ventas de manera eficiente y desde cualquier lugar.</p>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Propósito</h2>
                <p>El sistema de ventas web tiene como propósito optimizar la gestión de ventas, inventarios y el análisis de datos en tiempo real, mejorando la eficiencia del negocio.</p>
            </div>
            <div class="col-lg-6">
                <h2>Beneficios</h2>
                <ul>
                    <li>Acceso 24/7 desde cualquier lugar.</li>
                    <li>Automatización de tareas administrativas.</li>
                    <li>Análisis de datos en tiempo real.</li>
                    <li>Expansión sencilla a nuevos mercados.</li>
                </ul>
            </div>
        </div>

        <div class="row my-4 g-5">
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-header text-center text-info border-info fs-5 fw-semibold border-3 rounded-start rounded-end">
                        Con un sistema de ventas web
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Acceso 24/7 desde cualquier lugar.</li>
                            <li>Automatización de tareas administrativas.</li>
                            <li>Obtención de datos sobre el comportamiento del cliente.</li>
                            <li>Expansión sencilla del negocio.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-header text-center text-info border-info fs-5 fw-semibold border-3 rounded-start rounded-end">
                        Sin un sistema de ventas web
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Restricción a horarios específicos.</li>
                            <li>Mayor trabajo manual y propenso a errores.</li>
                            <li>Dificultad para recopilar datos relevantes.</li>
                            <li>Expansión física más costosa y compleja.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---Section Frase--->
    <section class="container-fluid bg-body-secondary text-center">
        <div class="container p-4">
            <h2 class="text-light mb-5"><span class="text-info"> !Es momento de usar la tecnología como aliada¡</span></h2>
            <div class="">
                <a href="{{route('login') }}" role="button" class="btn btn-primary">Probar ahora</a>
            </div>
        </div>

    </section>

    <!---Footer--->
    <footer class="text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2025 Copyright
            <a class="text-white" href="#"></a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>