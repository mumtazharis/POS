<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <style>
            /* Tambahkan garis pembatas pada sidebar */
            .sidebar {
                border-right: 1px solid #ccc; /* Garis pembatas vertikal */
            }

            .nav-link i {
            font-size: 1.5rem; /* Ukuran ikon */
        }
            
        </style>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="sidebar col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="http://localhost/POS/public/home" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="bi bi-cart3"></i> <span class="ms-1 d-none d-sm-inline">Products</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="http://localhost/POS/public/category/food-beverage" class="nav-link px-0"> <span class="d-none d-sm-inline">Food Beverage</span></a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/POS/public/category/beauty-health" class="nav-link px-0"> <span class="d-none d-sm-inline">Beauty Health</span></a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/POS/public/category/home-care" class="nav-link px-0"> <span class="d-none d-sm-inline">Home Care</span></a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/POS/public/category/baby-kid" class="nav-link px-0"> <span class="d-none d-sm-inline">Baby Kid</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="http://localhost/POS/public/user/4/name/mumtaz" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-person"></i> <span class="ms-1 d-none d-sm-inline">User</span> </a>
                            </li>
                            <li>
                                <a href="http://localhost/POS/public/penjualan" class="nav-link px-0 align-middle">
                                    <i class="bi bi-currency-dollar"></i> <span class="ms-1 d-none d-sm-inline">Penjualan</span> </a>
                            </li>
                        </ul>
                        <hr>
                        
                    </div>
                </div>
                <div class="col py-3">
                    <h1>Halaman Home<h1>
                </div>
            </div>
        </div>
       
    </body>
</html>
