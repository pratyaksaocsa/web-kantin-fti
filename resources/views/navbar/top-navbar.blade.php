<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light custom-navbar-background">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-uppercase" href="#">Kantin FTI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="/produk">Produk</a>
                <a class="nav-link {{ Request::is('checkout') ? 'active' : '' }}" href="/checkout">Checkout</a>
                <a class="btn btn-primary btn-outline-light " href="/register"> SignUp</a>
            </div>
        </div>
    </div>
</nav>
@include('component.cart-card')