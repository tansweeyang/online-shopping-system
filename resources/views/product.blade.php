<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/css/accountbtn.css" />
</head>

<body>
    @include('header')

    <!-- BREADCRUMB -->

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>

    <script>
        (function(global) {
            if (typeof(global) === "undefined") {
                throw new Error("window is undefined");
            }
            var _hash = "!";
            var noBackPlease = function() {
                global.location.href += "#";
                // making sure we have the fruit available for juice....
                // 50 milliseconds for just once do not cost much (^__^)
                global.setTimeout(function() {
                    global.location.href += "!";
                }, 50);
            };
            // Earlier we had setInerval here....
            global.onhashchange = function() {
                if (global.location.hash !== _hash) {
                    global.location.hash = _hash;
                }
            };
            global.onload = function() {
                noBackPlease();
                // disables backspace on page except on input fields and textarea..
                document.body.onkeydown = function(e) {
                    var elm = e.target.nodeName.toLowerCase();
                    if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
                        e.preventDefault();
                    }
                    // stopping event bubbling up the DOM tree..
                    e.stopPropagation();
                };
            };
        })(window);
    </script>

    {{-- SECTION  --}}
    <div class="section main main-raised">
        {{-- container --}}
        <div class="container">
            {{-- row --}}
            <div class="row">
                {{-- Product main img --}}
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{ asset('product_images/' . $product->product_image) }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{ asset('product_images/' . $product->product_image) }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('product_images/' . $product->product_image) }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('product_images/' . $product->product_image) }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('product_images/' . $product->product_image) }}" alt="">
                        </div>
                    </div>
                </div>


                {{--  FlexSlider  --}}
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name"> {{ $product->product_title }} </h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#review-form">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">${{ $product->product_price }} <del
                                    class="product-old-price">$990.00</del></h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <div class="product-options">
                            <label>
                                Size
                                <select class="input-select">
                                    <option value="0">X</option>
                                </select>
                            </label>
                            <label>
                                Color
                                <select class="input-select">
                                    <option value="0">Red</option>
                                </select>
                            </label>
                        </div>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">

                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <div class="btn-group" style="margin-left: 25px; margin-top: 15px">
                                <button class="add-to-cart-btn" pid="' . {{ $product->product_id }} . '"
                                    id="product"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>


                {{-- /Product main img  --}}

                {{-- Product thumb imgs --}}

                {{-- /Product thumb imgs  --}}

                {{-- Product details --}}


                {{-- /Product details --}}

                {{-- Product tab --}}
                <div class="col-md-12">
                    <div id="product-tab">
                        {{-- product tab nav  --}}
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab2">Details</a></li>
                            <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
                        </ul>
                        {{-- /product tab nav --}}

                        {{-- product tab content --}}
                        <div class="tab-content">
                            {{-- tab1 --}}
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- /tab1  --}}

                            {{-- tab2 --}}
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- /tab2 --}}

                            {{-- tab3  --}}
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    {{-- Rating --}}
                                    <div class="col-md-3">
                                        <div id="rating">
                                            <div class="rating-avg">
                                                <span>4.5</span>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 80%;"></div>
                                                    </div>
                                                    <span class="sum">3</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <span class="sum">2</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- /Rating --}}

                                    {{-- Reviews --}}
                                    <div class="col-md-6">
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore
                                                            magna aliqua</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore
                                                            magna aliqua</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore
                                                            magna aliqua</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="reviews-pagination">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- /Reviews --}}

                                    {{-- Review Form --}}
                                    <div class="col-md-3 mainn">
                                        <div id="review-form">
                                            <form class="review-form">
                                                <input class="input" type="text" placeholder="Your Name">
                                                <input class="input" type="email" placeholder="Your Email">
                                                <textarea class="input" placeholder="Your Review"></textarea>
                                                <div class="input-rating">
                                                    <span>Your Rating: </span>
                                                    <div class="stars">
                                                        <input id="star5" name="rating" value="5"
                                                            type="radio"><label for="star5"></label>
                                                        <input id="star4" name="rating" value="4"
                                                            type="radio"><label for="star4"></label>
                                                        <input id="star3" name="rating" value="3"
                                                            type="radio"><label for="star3"></label>
                                                        <input id="star2" name="rating" value="2"
                                                            type="radio"><label for="star2"></label>
                                                        <input id="star1" name="rating" value="1"
                                                            type="radio"><label for="star1"></label>
                                                    </div>
                                                </div>
                                                <button class="primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- /Review Form  --}}
                                </div>
                            </div>
                            {{-- /tab3 --}}
                        </div>
                        {{--  /product tab content  --}}
                    </div>
                </div>
                {{-- /product tab --}}
            </div>
            {{-- /row --}}
        </div>
        {{-- /container --}}
    </div>
    {{-- /SECTION --}}



    {{-- Section --}}
    <div class="section main main-raised">
        {{-- container --}}
        <div class="container">
            {{-- row --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products</h3>
                    </div>
                </div>
                {{--  Session here  --}}

                @foreach ($relatedProducts as $relatedProduct)
                    <div class='col-md-3 col-xs-6'>
                        <a href='product.php?p=$pro_id'>
                            <div class='product'>
                                <div class='product-img'>
                                    <img src="{{ asset('product_images/' . $relatedProduct->product_image) }}"
                                        style='max-height: 170px;' alt=''>
                                    <div class='product-label'>
                                        <span class='sale'>-30%</span>
                                        <span class='new'>NEW</span>
                                    </div>
                                </div>
                        </a>
                        <div class='product-body'>
                            <p class='product-category'>{{$relatedProduct->product_cat}}</p>
                            <h3 class='product-name header-cart-item-name'><a
                                    href='product.php?p=$pro_id'>{{$relatedProduct->product_title}}</a></h3>
                            <h4 class='product-price header-cart-item-info'>{{$relatedProduct->product_price}}<del
                                    class='product-old-price'>$990.00</del></h4>
                            <div class='product-rating'>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                            </div>
                            <div class='product-btns'>
                                <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span
                                        class='tooltipp'>add to wishlist</span></button>
                                <button class='add-to-compare'><i class='fa fa-exchange'></i><span
                                        class='tooltipp'>add to compare</span></button>
                                <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick
                                        view</span></button>
                            </div>
                        </div>
                        <div class='add-to-cart'>
                            <button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist'
                                href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
                        </div>
                    </div>
            </div>
            @endforeach

            {{-- product --}}

            {{-- /product --}}
        </div>
        {{-- /row --}}
    </div>
    {{-- /container --}}
    <!-- /Section -->

    <!-- Include Newsletter and Footer -->
    @include('newsletter')
    @include('footer')
</body>

</html>
