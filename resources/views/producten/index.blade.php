<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Beschermingsproducten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: #f8f9fa;
        }
        .header-bg, .footer-bg {
            background: #262a91;
            color: white;
        }
        .navbar .navbar-brand img {
            height: 36px;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
        }
        .cart-icon {
            font-size: 1.6rem;
            vertical-align: middle;
        }
        .product-card {
            background: #e6f0ff;
            border-radius: 18px;
            box-shadow: 0 6px 16px 0 rgba(46, 70, 119, 0.10);
            border: none;
            transition: transform 0.1s;
            padding-bottom: 10px;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .product-card:hover {
            transform: translateY(-2px) scale(1.01);
            box-shadow: 0 8px 24px 0 rgba(46, 70, 119, 0.15);
        }
        .product-badge {
            background: #fff;
            border-radius: 6px;
            padding: 4px 12px;
            font-size: 1rem;
            font-weight: 500;
            display: inline-block;
            margin-top: 16px;
            margin-bottom: 10px;
            text-align: center;
        }
        .product-img {
            width: 110px;
            height: 110px;
            object-fit: contain;
            border-radius: 8px;
            margin-bottom: 16px;
            background: #fff;
        }
        .custom-btn {
            background: #231552;
            color: #fff;
            border-radius: 16px;
            border: none;
            box-shadow: 0 2px 8px 0 rgba(35,21,82,0.15);
            padding: 7px 32px;
            margin-top: 8px;
        }
        .custom-btn:hover {
            background: #4936b1;
            color: #fff;
        }
        .row-eq-spacing {
            row-gap: 2.2rem;
            column-gap: 0.3rem;
        }
        .footer-bg {
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <nav class="navbar header-bg shadow-sm px-2">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/startpagina">
                <img src="/images/aquafin.png" alt="Aquafin Logo" class="me-2">
            </a>
            <span class="text-white fw-semibold fs-5 me-auto ms-2 d-none d-md-block">Homepage</span>
            <a href="#" class="me-2 nav-link d-flex align-items-center">
                <i class="bi bi-cart cart-icon"></i>
            </a>
            <a href="/register" class="nav-link fw-semibold">Registreer / Login</a>
        </div>
    </nav>
    
    <!-- PRODUCTEN GRID -->
    <div class="container py-5">
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold" style="color: #231552;">Beschermingsproducten</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-eq-spacing justify-content-center">
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Veiligheidshelm (met kinband)</div>
                    <img src="/images/beschermproducten/helm.jpg" class="product-img" alt="Veiligheidshelm">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Oorkappen / gehoorbescherming</div>
                    <img src="/images/beschermproducten/oorkappen.jpg" class="product-img" alt="Oorkappen">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Veiligheidsbril / gelaatsscherm</div>
                    <img src="/images/beschermproducten/veiligheidsbril.jpg" class="product-img" alt="Veiligheidsbril">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Stofmaskers (FFP2, FFP3)</div>
                    <img src="/images/beschermproducten/stofmasker.jpg" class="product-img" alt="Stofmasker">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Werkhandschoenen</div>
                    <img src="/images/beschermproducten/werkhandschoenen.jpg" class="product-img" alt="Werkhandschoenen">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Veiligheidsschoenen</div>
                    <img src="/images/beschermproducten/veiligheidsschoenen.jpg" class="product-img" alt="Veiligheidsschoenen">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Werklaarzen</div>
                    <img src="/images/beschermproducten/werklaarzen.jpg" class="product-img" alt="Werklaarzen">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Fluovest / signalisatiekledij</div>
                    <img src="/images/beschermproducten/fluovest.jpg" class="product-img" alt="Fluovest">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Overall</div>
                    <img src="/images/beschermproducten/overall.jpg" class="product-img" alt="Overall">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Valharnas en lijn</div>
                    <img src="/images/beschermproducten/valharnas.jpg" class="product-img" alt="Valharnas">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Gasdetector</div>
                    <img src="/images/beschermproducten/gasdetector.jpg" class="product-img" alt="Gasdetector">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">EHBO-koffer / verbanddoos</div>
                    <img src="/images/beschermproducten/ehbo.jpg" class="product-img" alt="EHBO-koffer">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Klim- en valbeveiligingsmateriaal</div>
                    <img src="/images/beschermproducten/klimmateriaal.jpg" class="product-img" alt="Klimmateriaal">
                    <a href="#" class="custom-btn">Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="footer-bg">
        <span class="fw-semibold">© {{ date('Y') }} Aquafin - Alle rechten voorbehouden</span>
    </footer>
</body>
</html>
