<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Body</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
</head>

<body>
    <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                {{-- Indicators --}}


                {{--  Wrapper for slides  --}}
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="img/banner3.jpg" alt="Los Angeles" style="width:100%;">

                    </div>

                    <div class="item">
                        <img src="img/banner2.jpg" style="width:100%;">

                    </div>

                    <div class="item">
                        <img src="img/banner4.jpg" alt="New York" style="width:100%;">

                    </div>
                    <div class="item">
                        <img src="img/banner1.jpg" alt="New York" style="width:100%;">

                    </div>
                    <div class="item">
                        <img src="img/banner3.jpg" alt="New York" style="width:100%;">

                    </div>
                </div>

                {{-- Left and right controls  --}}
                <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        {{-- SECTION --}}
        <div class="section mainn mainn-raised">
            {{-- container --}}
            <div class="container">
                {{-- row --}}
                <div class="row">
                    {{-- shop --}}
                    <div class="col-md-4 col-xs-6">
                        <a href="{{ url('product?p=78') }}">
                            <div class="shop">
                                <div class="shop-img">
                                    <img src="{{ asset('img/shop01.png') }}" alt="">
                                </div>
                                <div class="shop-body">
                                    <h3>Laptop<br>Collection</h3>
                                    <a href="{{ url('product?p=78') }}" class="cta-btn">Shop now <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- /shop --}}

                    {{-- shop --}}
                    <div class="col-md-4 col-xs-6">
                        <a href="{{ url('product?p=72') }}">
                            <div class="shop">
                                <div class="shop-img">
                                    <img src="{{ asset('img/shop03.png') }}" alt="">
                                </div>
                                <div class="shop-body">
                                    <h3>Accessories<br>Collection</h3>
                                    <a href="{{ url('product?p=72') }}" class="cta-btn">Shop now <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- /shop --}}

                    {{-- shop --}}
                    <div class="col-md-4 col-xs-6">
                        <a href="{{ url('product?p=79') }}">
                            <div class="shop">
                                <div class="shop-img">
                                    <img src="{{ asset('img/shop02.png') }}" alt="">
                                </div>
                                <div class="shop-body">
                                    <h3>Cameras<br>Collection</h3>
                                    <a href="{{ url('product?p=79') }}" class="cta-btn">Shop now <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- /shop --}}
                </div>
                {{-- /row --}}
            </div>
            {{-- /container --}}
        </div>
        {{-- SECTION --}}

        {{-- /SECTION --}}
        <div class="section">
            {{--  container  --}}
            <div class="container">
                {{--  row  --}}
                <div class="row">

                    {{-- section title  --}}
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">New Products</h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{--  /section title  --}}

                    {{--  Products tab & slick  --}}
                    <div class="col-md-12 mainn mainn-raised">
                        <div class="row">
                            <div class="products-tabs">
                                {{--  tab  --}}
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">
                                        @foreach ($new_products as $new_product)
                                            <div class="product">
                                                <a href="{{ url('/product/' . $new_product->product_id) }}">
                                                <div class="product-img">
                                                    <img src="{{ asset('product_images/' . $new_product->product_image) }}"
                                                        style="max-height: 170px;" alt="">
                                                    <div class="product-label">
                                                        <span class="sale">-30%</span>
                                                        <span class="new">NEW</span>
                                                    </div>
                                                </div>
                                                </a>
                                                <div class="product-body">
                                                    <p class="product-category">{{ $new_product->category->title }}
                                                    </p>
                                                    <h3 class="product-name header-cart-item-name"> <a
                                                            href="{{ url('/product/' . $new_product->id) }}">{{ $new_product->name }}</a>
                                                    </h3>
                                                    <h4 class="product-price header-cart-item-info">
                                                        {{ $new_product->price }}<del
                                                            class="product-old-price">$990.00</del>
                                                    </h4>
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="product-btns">
                                                        <button class="add-to-wishlist"><i
                                                                class="fa fa-heart-o"></i><span class="tooltipp">add
                                                                to wishlist</span></button>
                                                        <button class="add-to-compare"><i
                                                                class="fa fa-exchange"></i><span class="tooltipp">add
                                                                to compare</span></button>
                                                        <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                    </div>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button pid="{{ $new_product->id }}" id="product"
                                                        class="add-to-cart-btn block2-btn-towishlist"
                                                        href="#"><i class="fa fa-shopping-cart"></i> add to
                                                        cart</button>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{--  /product  --}}
                                    </div>
                                    <div id="slick-nav-1" class="products-slick-nav"></div>
                                </div>
                                {{--  tab  --}}
                            </div>
                        </div>
                    </div>
                    {{--  Products tab & slick  --}}
                </div>
                {{--  /row  --}}
            </div>
            {{--  /container  --}}
        </div>
        {{--  /SECTION  --}}

        {{-- HOT DEAL SECTION --}}
        <div id="hot-deal" class="section mainn mainn-raised">
            {{-- container --}}
            <div class="container">
                {{-- row --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="hot-deal">
                            <ul class="hot-deal-countdown">
                                <li>
                                    <div>
                                        <h3>02</h3>
                                        <span>Days</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>10</h3>
                                        <span>Hours</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>34</h3>
                                        <span>Mins</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3>60</h3>
                                        <span>Secs</span>
                                    </div>
                                </li>
                            </ul>
                            <h2 class="text-uppercase">hot deal this week</h2>
                            <p>New Collection Up to 50% OFF</p>
                            <a class="primary-btn cta-btn" href="store.php">Shop now</a>
                        </div>
                    </div>
                </div>
                {{-- /row --}}
            </div>
            {{-- /container --}}
        </div>
        {{-- /HOT DEAL SECTION --}}

        {{-- SECTION --}}
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">Top selling</h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab2">Formals</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Shirts</a></li>
                                    <li><a data-toggle="tab" href="#tab2">T-Shirts</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Pants</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /section title -->
                    <!-- Products tab & slick -->
                    <div class="col-md-12 mainn mainn-raised">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab2" class="tab-pane fade in active">
                                    <div class="products-slick" data-nav="#slick-nav-2">
                                        <!-- product -->
                                        @foreach ($top_selling_products as $top_selling_product)
                                            <div class='product'>
                                                <a href='{{ url('/product/' . $top_selling_product->product_id) }}'>
                                                    <div class='product-img'>
                                                        <img src='{{ asset('product_images/' . $top_selling_product->product_image) }}'
                                                            style='max-height: 170px;' alt=''>
                                                        <div class='product-label'>
                                                            <span class='sale'>-30%</span>
                                                            <span class='new'>NEW</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class='product-body'>
                                                    <p class='product-category'>
                                                        {{ $top_selling_product->category->title }}</p>
                                                    <h3 class='product-name header-cart-item-name'><a
                                                            href='{{ url('/product/' . $top_selling_product->product_id) }}'>{{ $top_selling_product->product_title }}</a>
                                                    </h3>
                                                    <h4 class='product-price header-cart-item-info'>
                                                        {{ $top_selling_product->price }}<del
                                                            class='product-old-price'>$990.00</del></h4>
                                                    <div class='product-rating'>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                    </div>
                                                    <div class='product-btns'>
                                                        <button class='add-to-wishlist'><i
                                                                class='fa fa-heart-o'></i><span class='tooltipp'>add
                                                                to wishlist</span></button>
                                                        <button class='add-to-compare'><i
                                                                class='fa fa-exchange'></i><span class='tooltipp'>add
                                                                to compare</span></button>
                                                        <button class='quick-view'><i class='fa fa-eye'></i><span
                                                                class='tooltipp'>quick view</span></button>
                                                    </div>
                                                </div>
                                                <div class='add-to-cart'>
                                                    <button pid='{{ $top_selling_product->product_id }}'
                                                        id='product' class='add-to-cart-btn block2-btn-towishlist'
                                                        href='#'><i class='fa fa-shopping-cart'></i> add to
                                                        cart</button>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- /product -->
                                    </div>
                                    <div id="slick-nav-2" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- /Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        {{-- /SECTION --}}




        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Top selling</h4>
                            <div class="section-nav">
                                <div id="slick-nav-3" class="products-slick-nav"></div>
                            </div>
                        </div>


                        <div class="products-widget-slick" data-nav="#slick-nav-3">
                            <div id="get_product_home">
                                <!-- product widget -->

                                <!-- product widget -->
                            </div>

                            <div id="get_product_home2">
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Top selling</h4>
                            <div class="section-nav">
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                        </div>

                        <div class="products-widget-slick" data-nav="#slick-nav-4">
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product05.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product06.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>

                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product07.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product08.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product09.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-sm visible-xs">

                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Top selling</h4>
                            <div class="section-nav">
                                <div id="slick-nav-5" class="products-slick-nav"></div>
                            </div>
                        </div>

                        <div class="products-widget-slick" data-nav="#slick-nav-5">
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>

                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->


                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product05.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product06.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                                        </h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
    </div>

</body>

</html>
