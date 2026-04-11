<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Saurashtra Plastics')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('ecommerce-demo/assets/css/style.css') }}">
</head>

<body>
    @if (!View::hasSection('hide_navbar'))
        <nav class="navbar navbar-expand-lg sticky-top topbar py-2">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('store.home') }}">Saurashtra Plastics</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-lg-3 mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('store.home') ? 'active' : '' }}"
                                href="{{ route('store.home') }}">Home</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('store.products') ? 'active' : '' }}"
                                href="{{ route('store.products') }}">Products</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('store.about') ? 'active' : '' }}"
                                href="{{ route('store.about') }}">About Us</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->routeIs('store.contact') ? 'active' : '' }}"
                                href="{{ route('store.contact') }}">Contact Us</a></li>
                    </ul>
                    <form class="search-pill d-flex mx-lg-4 my-3 my-lg-0 flex-grow-1" role="search">
                        <input class="form-control" type="search"
                            placeholder="Search plastic products, categories, manufacturers...">
                        <button class="btn btn-primary px-3" type="button"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="d-flex gap-2 align-items-center">
                        <a href="{{ route('store.cart') }}" class="btn btn-outline-primary position-relative">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span id="cartCount"
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                        </a>
                        <a href="{{ route('store.auth') }}" class="btn btn-primary">Login / Register</a>
                    </div>
                </div>
            </div>
        </nav>
    @endif

    @yield('content')

    @if (!View::hasSection('hide_footer'))
        <footer class="footer py-5 mt-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <h5>Saurashtra Plastics</h5>
                        <p class="mb-0 small">A digital-first B2B platform for plastic procurement, product sourcing,
                            and supplier discovery.</p>
                    </div>
                    <div class="col-md-2">
                        <h6>Company</h6>
                        <a href="{{ route('store.about') }}">About</a><br>
                        <a href="{{ route('store.contact') }}">Contact</a><br>
                        <a href="#">Careers</a>
                    </div>
                    <div class="col-md-2">
                        <h6>Marketplace</h6>
                        <a href="{{ route('store.products') }}">Products</a><br>
                        <a href="{{ route('store.cart') }}">Cart</a>
                    </div>
                    <div class="col-md-2">
                        <h6>Resources</h6>
                        <a href="#">Help Center</a><br>
                        <a href="#">Shipping Policy</a>
                    </div>
                    <div class="col-md-2">
                        <h6>Legal</h6>
                        <a href="#">Terms</a><br>
                        <a href="#">Privacy</a>
                    </div>
                </div>
            </div>
        </footer>
    @endif

    <div class="toast-container position-fixed bottom-0 end-0 p-3" id="liveToastWrap"></div>

    <script>
        window.SP_ROUTES = {
            home: "{{ route('store.home') }}",
            products: "{{ route('store.products') }}",
            details: "{{ route('store.product.details') }}",
            cart: "{{ route('store.cart') }}",
            checkout: "{{ route('store.checkout') }}"
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ecommerce-demo/assets/js/data.js') }}"></script>
    <script src="{{ asset('ecommerce-demo/assets/js/app.js') }}"></script>
</body>

</html>
