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

<!-- SECTION -->
<div class="section main main-raised">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            @php
                use App\Models\Product;
                $product = Product::find(request()->get('p'));
            @endphp

            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{ asset('product_images/' . $product->product_image) }}" alt="">
                    </div>

                    <!-- Add additional images if necessary -->
                </div>
            </div>

            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{ $product->product_title }}</h2>
                    <!-- Other product details -->
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <!-- product tab content -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section main main-raised">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Related Products -->
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Related Products</h3>
                </div>
            </div>
            <!-- Loop through related products -->
            @php
                $relatedProducts = Product::where('product_id', '>', request()->get('p'))->limit(3)->get();
            @endphp

            @foreach ($relatedProducts as $relatedProduct)
                <div class="col-md-3 col-xs-6">
                    <!-- Display related product details -->
                </div>
            @endforeach
            <!-- /Loop through related products -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->

<!-- Include Newsletter and Footer -->
@include('newsletter')
@include('footer')
