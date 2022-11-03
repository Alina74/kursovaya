<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm d-flex flex-column">
    <div class="container">
        <a href="#" class="navbar-brand flex-shrink-0 me-2 me-xl-4">
            <img class="d-block" src="" width="116" alt="Лого">
        </a>
        <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarUserNav" aria-controls="navbarUserNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="dropdown order-lg-3">
            <a href="#" class="d-inline-block py-1" data-bs-toggle="dropdown">
                <img class="rounded-circle" src="" width="40" alt="User">
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <div class="d-flex align-items-start border-bottom px-3 py-1 mb-2" style="width: 16rem;">
                    <img class="rounded-circle" src="" width="48" alt="User">
                    <div class="ps-2">
                        <h6 class="fs-base mb-0">Robert Fox</h6>
                        <div class="star-rating star-rating-sm">
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                            <i class="star-rating-icon fi-star-filled active"></i>
                        </div>
                        <div class="fs-xs py-2">(302) 555-0107<br>robert_fox@gmail.com</div>
                    </div>
                </div>
                <a href="#" class="dropdown-item">
                    <i class="fi-user opacity-60 me-2"></i>
                    Personal Info
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fi-lock opacity-60 me-2"></i>
                    Password & Security
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fi-list opacity-60 me-2"></i>
                    My Listings
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fi-heart opacity-60 me-2"></i>
                    Wishlist
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fi-star opacity-60 me-2"></i>
                    Reviews
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fi-bell opacity-60 me-2"></i>
                    Notifications
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Help</a>
                <a href="#" class="dropdown-item">Sign Out</a>
            </div>
        </div>
        <div class="collapse navbar-collapse order-lg-2" id="navbarUserNav">
            <ul class="navbar-nav">
                <div class="input-group input-group-sm d-none d-lg-flex ps-2 ps-xxl-5 order-lg-3">
                    <i class="fi-search position-absolute text-muted top-50 translate-middle-y ms-2"></i>
                    <input class="form-control border-top-0 border-start-0 border-end-0 rounded-0" type="search" placeholder="Search site...">
                </div>
            </ul>
        </div>

    </div>
    <div class="collapse navbar-collapse order-lg-2" id="navbarUserNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Книги</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#" class="dropdown-item">Action link</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-item dropdown-toggle">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">Action link</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Another action</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Something else here</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Yet another link</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">Another action</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Доставка и оплата</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Контакты</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Литэра в соц-сетях</a>
                <ul class="dropdown-menu dropdown-menu">
                    <li>
                        <a href="#" class="dropdown-item">Action link</a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-item">Another action</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</header>
</body>
</html>
