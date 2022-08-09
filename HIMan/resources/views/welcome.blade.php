<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        {{-- <link rel="icon" href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/images/favicon-32x32.png" type="image/png"/> --}}
        <!--plugins-->
    
    
        <link href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
        <link href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
        <link href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
        <!-- loader-->
        <link href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/css/pace.min.css" rel="stylesheet"/>
        <script src="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/js/pace.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/css/app.css" rel="stylesheet">
        <link href="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/css/icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <style>
            .pace{
                display:  none !important;
            }
            .card-body{
                background-color:#151313 ;
                margin-bottom: 0%;
            }
        </style>
        <title>Gestion de Stock</title>
        
	</head>
<body>

    <div class="card">
        <div class="card-body">
            <nav class="navbar navbar-expand-lg navbar-dark  rounded">
                <div class="container-fluid">	<a class="navbar-brand" href="#">Your Stock Manager</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-dark me-3 radius-30 px-4" type="submit"><i class='bx bx-lock'></i> Login</button>
                            <button class="btn btn-light radius-30 px-4" type="submit"><i class='bx bx-user'></i> Register</button>
                        </form>
                    </div>
                </div>
            </nav>
            <hr>
        </div>
    </div>

<!--start switcher-->
 <div class="switcher-wrapper">
    <div class="switcher-btn"><i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <p class="mb-0">Gaussian Texture</p>
        <hr>

        <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
        </ul>
        <hr>
        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
            <li id="theme13"></li>
            <li id="theme14"></li>
            <li id="theme15"></li>
        </ul>
    </div>
</div>
<!--end switcher-->

<!-- Bootstrap JS -->
<script type="text/javascript" src="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/js/jquery.min.js"></script>
<script src="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<!--app JS-->
<script src="http://laravel-vertical.local/Stage/laravel-vertical/laravel-vertical/assets/js/app.js"></script>


    
    
</body>
</html>
