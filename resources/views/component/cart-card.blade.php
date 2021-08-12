<div class="my-cart" onclick="carttampil()" onmouseover="onHover()" onmouseout="offHover()">
        <img id="cart-img-button" src="{{ asset('assets/img/cart-icon-white.png') }}" />
</div>

<div class="card cart-card col-md-5 col-sm-7 col-xs-12 col-lg-4" id="tampilcart">
    <div class="card-body">
    <h5 class="card-title">Keranjang <span id="quantity_cart">(0)</span> </h5>
    <hr>
    <div class="row mb-2">
        <div class="img-cart col-md-2 col-sm-2 col-xs-2">
            <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="cart-card-img rounded-circle" alt="">
        </div>
        <div class="text-cart col-md-6 col-sm-6 col-xs-6 align-items-center">
            <h5 class=" mb-0">
                Indomie Goreng 
            </h5>
            <p class="mb-0">Jumlah : 2</p>
        </div>
        <div class="price-cart col-md-4 col-sm-4 col-xs-4 text-end align-items-center">
            <h6>Rp.15.000,00</h6>
        </div>
    </div>
    <hr>
    <div class="row mb-2 ">
        <div class="img-cart col-md-2 col-sm-2 col-xs-2">
            <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="cart-card-img rounded-circle" alt="">
        </div>
        <div class="text-cart col-md-6 col-sm-6 col-xs-6 align-items-center">
            <h5 class=" mb-0">
                Indomie Goreng 
            </h5>
            <p class="mb-0">Jumlah : 2</p>
        </div>
        <div class="price-cart col-md-4 col-sm-4 col-xs-4 text-end align-items-center">
            <h6>Rp.15.000,00</h6>
        </div>
    </div>
    <hr>
    <div class="row mb-2">
        <div class="img-cart col-md-2 col-sm-2 col-xs-2">
            <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="cart-card-img rounded-circle" alt="">
        </div>
        <div class="text-cart col-md-6 col-sm-6 col-xs-6 align-items-center">
            <h5 class=" mb-0">
                Indomie Goreng 
            </h5>
            <p class="mb-0">Jumlah : 2</p>
        </div>
        <div class="price-cart col-md-4 col-sm-4 col-xs-4 text-end align-items-center">
            <h6>Rp.15.000,00</h6>
        </div>
    </div>
    <hr>
    <div class="row mb-2">
        <h6 class="text-start col">Total Harga</h6>
        <h6 class="text-end col">: Rp. 15.000,00</h6>
    </div>
    <a href="#" class="btn btn-primary w-100">Proses Checkout</a>
    </div>
</div>
<script>
    

    function carttampil()
    {       
        var displaycart = document.getElementById("tampilcart").style.display;
        if(document.getElementById("tampilcart").style.display != 'block'){
            document.getElementById("tampilcart").style.display="block";
            document.getElementById("tampilcart").style.opacity="1";
        } else {
            document.getElementById("tampilcart").style.display="none";
            document.getElementById("tampilcart").style.opacity="0";
        }        
    }

    function onHover()
    {
        document.getElementById("cart-img-button").setAttribute("src", "{{ asset('assets/img/cart-icon-blue.png') }}");
    }

    function offHover()
    {
        document.getElementById("cart-img-button").setAttribute("src", "{{ asset('assets/img/cart-icon-white.png') }}");
    }

</script>