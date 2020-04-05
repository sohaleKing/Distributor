@extends('layouts.app')
@extends('layouts.head')
@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                  
<div class="page-content-wrapper">
        <!--=======  single product slider details area  =======-->

        <div class="single-product-slider-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--=======  product details slider area  =======-->

                        <div class="product-details-slider-area product-details-slider-area--side-move">

                            <!--<div class="product-badge-wrapper">
                                <span class="hot">Hot</span>
                            </div>-->

                            <div class="row row-5">
                                <div class="col-md-9 order-1 order-md-2">
                                    <div class="big-image-wrapper">
                                        <div class="enlarge-icon">
                                            <a class="btn-zoom-popup" href="javascript:void(0)" data-tippy="Click to enlarge" data-tippy-placement="left" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"><i class="pe-7s-expand1"></i></a>
                                        </div>
                                        <div class="product-details-big-image-slider-wrapper product-details-big-image-slider-wrapper--side-space theme-slick-slider" data-slick-setting='{
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "arrows": false,
                    "autoplay": false,
                    "autoplaySpeed": 5000,
                    "fade": true,
                    "speed": 500,
                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
                }' data-slick-responsive='[
                    {"breakpoint":1501, "settings": {"slidesToShow": 1, "arrows": false} },
                    {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                    {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                    {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                    {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                    {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} }
                ]'>
                                            <div class="single-image">
                                                <img src="assets/img/products/olive_oil-1.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="single-image">
                                                <img src="assets/img/products/olive_oil-2.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="single-image">
                                                <img src="assets/img/products/olive_oil-3.jpg" class="img-fluid" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 order-2 order-md-1">
                                    <div class="product-details-small-image-slider-wrapper product-details-small-image-slider-wrapper--vertical-space theme-slick-slider" data-slick-setting='{
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "centerMode": false,
                "arrows": true,
                "vertical": true,
                "autoplay": false,
                "autoplaySpeed": 5000,
                "speed": 500,
                "asNavFor": ".product-details-big-image-slider-wrapper",
                "focusOnSelect": true,
                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-up" },
                "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-down" }
            }' data-slick-responsive='[
                {"breakpoint":1501, "settings": {"slidesToShow": 3, "arrows": true} },
                {"breakpoint":1199, "settings": {"slidesToShow": 3, "arrows": true} },
                {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": true, "slidesToScroll": 1} },
                {"breakpoint":767, "settings": {"slidesToShow": 3, "arrows": false, "slidesToScroll": 1, "vertical": false, "centerMode": true} },
                {"breakpoint":575, "settings": {"slidesToShow": 3, "arrows": false, "slidesToScroll": 1, "vertical": false, "centerMode": true} },
                {"breakpoint":479, "settings": {"slidesToShow": 2, "arrows": false, "slidesToScroll": 1, "vertical": false, "centerMode": true} }
            ]'>
                                        <div class="single-image">
                                            <img src="assets/img/products/olive_oil-1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="single-image">
                                            <img src="assets/img/products/olive_oil-2.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="single-image">
                                            <img src="assets/img/products/olive_oil-3.jpg" class="img-fluid" alt="">
                                        </div>                                        
                                    </div>
                                </div>
                            </div>



                        </div>

                        <!--=======  End of product details slider area  =======-->
                    </div>
                    <div class="col-lg-6">
                        <!--=======  product details description area  =======-->

                        <div class="product-details-description-wrapper">
                            <h2 class="item-title">Olive Oil</h2>
                           
                            <p class="description">Olive oil is rich in vitamin E, a fat soluble vitamin that supports normal nerve conduction and plays
							a role in immunity. It is also a good source of vitamin K, which is another fat soluble vitamin that is responsible for blood clotting.</p>                         

                            <div class="add-to-cart-btn d-inline-block">
                                <button class="theme-button theme-button--alt">ADD TO CART</button>
                            </div>


                            <div class="quick-view-other-info">
                                <div class="other-info-links">
                                    <a href="javascript:void(0)"><i class="fa fa-heart-o"></i> ADD TO WISHLIST</a>
                                
                                </div>

                                
                            </div>
                        </div>

                        <!--=======  End of product details description area  =======-->
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of single product slider details area  =======-->

        <!--=======  single product description tab area  =======-->

        <div class="single-product-description-tab-area section-space">
            <!--=======  description tab navigation  =======-->

            <div class="description-tab-navigation">
                <div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
                    <a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#product-description" role="tab" aria-selected="true">Health Benefits</a>
					<a class="nav-item nav-link" id="additional-info-tab2" data-toggle="tab" href="#product-additional-info2" role="tab" aria-selected="false">What Is Extra-Virgin Olive Oil?</a> 
					<a class="nav-item nav-link" id="additional-info-tab3" data-toggle="tab" href="#product-additional-info3" role="tab" aria-selected="false">Healthy Ways to Use Olive Oil</a> 
                    <a class="nav-item nav-link" id="additional-info-tab" data-toggle="tab" href="#product-additional-info" role="tab" aria-selected="false">References</a>                  
                </div>
            </div>

            <!--=======  End of description tab navigation  =======-->

            <!--=======  description tab content  =======-->


            <div class="single-product-description-tab-content">

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  description content  =======-->

                                    <div class="description-content">
                                        <p class="long-desc">In addition, olive oil is high in monounsaturated fat, which has been shown to increase good cholesterol (HDL) and lower bad cholesterol (LDL).</p>

										<p class="long-desc">Some studies suggest that adding extra virgin olive oil to the diet, about one to two tablespoons per day, can have anti-inflammatory effects by reducing c-reactive protein.</p>
										
										<p class="long-desc">Another way olive oil may help to protect the heart is based on its content of polyphenols. Some of the polyphenols in olive oil can prevent blood platelets from clumping together, which is a cause of heart attacks. The FDA supports the claim that "eating 2 tablespoons of olive oil each day may reduce the risk of coronary heart disease."</p>
										
										<p class="long-desc">Other research suggests that consuming olive oil could protect us from cognitive decline, osteoporosis, and even improve the balance of bacteria in our guts.</p>
										
										<p class="long-desc">It is important to note that many of the healthy components of olive oil, such as phytonutrients, are present in high amounts only in virgin and extra-virgin olive oil.</p>
                                    </div>

                                    <!--=======  End of description content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="product-additional-info2" role="tabpanel" aria-labelledby="additional-info-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  additional info content  =======-->

                                    <div class="additional-info-content">
                                        <p class="product_dimensions">The label designations virgin, extra-virgin, and pure olive oil refer to the level of acidity of the oil as well as the extent of processing used to extract the oil. General rule of thumb is the lower the acidity, the better.</p>
										<p class="product_dimensions">Virgin olive oil is 100 percent unadulterated olive oil, meaning it is not heated or chemically processed. Instead, it is extracted from the olives purely by mechanical means (either by pressing or spinning the olives after they are mashed into a paste). The most superior "extra virgin" has the most nutrition, a lower acidify than virgin olive oil, very low rancidity, and strongest olive flavor.
										</p><p class="product_dimensions">Pure olive oil is processed from the pulp after the first pressing using heat and chemicals. It is lighter in flavor and less expensive. The benefit here is that it has a more neutral flavor and a higher smoke point. Virgin and extra virgin olive oil have lower smoke points and will start to break down when heated too high, yielding an off flavor.
										</p>
                                    </div>

                                    <!--=======  End of additional info content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="tab-pane fade" id="product-additional-info3" role="tabpanel" aria-labelledby="additional-info-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  additional info content  =======-->

                                    <div class="additional-info-content">
                                        <p class="product_dimensions">Olive oil is a staple in Mediterranean and European cuisine. Use extra-virgin olive oil to drizzle vegetables, soups, stews, bean dishes, meats, fish, and poultry. Or, use it to make light sauté or your own, lower sodium salad dressing.
										If you are looking to cook at higher heats, such as grilling, you can use extra virgin olive oil.</p> <p class="product_dimensions">However, you are probably better off using vegetable oil, canola oil, virgin, or pure olive oil, due to their higher smoke points and more neutral flavor.</p>
										<p class="product_dimensions">Heating extra virgin olive oil too hot can cause it to lose the properties that make it extra virgin. But it is important to note that some of the alternative oils are processed. Avoid extremely high heat cooking altogether, such as frying, as this type of cooking is rich in calories and may produce carcinogenic compounds. 
										</p>
                                    </div>

                                    <!--=======  End of additional info content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="tab-pane fade" id="product-additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  additional info content  =======-->

                                    <div class="additional-info-content">
                                        <p class="product_dimensions">Berr C, et al. Olive Oil and Cognition: Results from the Three-City Study. Dementia and Geriatric Cognitive Disorders. 28.4 (2009):357-364.</p>
                                    
									<p class="product_dimensions">
                                                   Bogani, P, et. al Postprandial anti-inflammatory and antioxidant effects of extra virgin olive oil. Atherosclerosis. 190.1 (2007):181-186
                                                    </p>
									<p class="product_dimensions">
                                                    Kontogianni MD. The impact of olive oil consumption pattern on the risk of acute coronary syndromes: The CARDIO2000 case-control study. Clinical Cardiology. 30.3 (2007):125-9.  
                                                    </p>
									<p class="product_dimensions">
                                                    Labensky, SR, Hause, AM. On Cooking: A textbook of Culinary Fundamentals. 3rd ed. Upper Sadle River, NJ: Prentice Hall, 2003: 129-130 
                                                    </p>
									<p class="product_dimensions">
                                                   Linus Pauling Institute. Micronutrients for Health.  
                                                    </p>
									<p class="product_dimensions">
                                                    Lucas, L et al Molecular Mechanisms of Inflammation. Anti-Inflammatory Benefits of Virgin Olive Oil and the Phenolic Compound Oleocanthal. Current Pharmaceutical Design, Volume 17, Number 8, March 2011 , pp. 754-768(15) 
                                                    </p>
									
									</div>

                                    <!--=======  End of additional info content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>

                    


            </div>

            <!--=======  End of description tab content  =======-->

        </div>

        <!--=======  End of single product description tab area  =======-->

    </div>

    <!--====================  End of page content wrapper  ====================-->




@include('layouts.script')                
@endsection