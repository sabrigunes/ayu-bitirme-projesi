@extends('layout')

@section('content')
<!-- inventory-section -->
<section class="inventory-section pb-0 layout-radius">
    <div class="boxcar-container">
        <div class="boxcar-title-three">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><span>Cars for Sale</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="inspection-column v2 col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="gallery-sec">
                        <div class="image-column wrap-gallery-box">
                            <div class="inner-column inventry-slider-two">
                                <div class="image-box">
                                    <figure class="image"><a href="images/resource/inventory1-7.png" data-fancybox="gallery"><img src="images/resource/inventory1-7.png" alt=""></a></figure>

                                </div>
                                <div class="image-box">
                                    <figure class="image"><a href="images/resource/inventory1-8.png" data-fancybox="gallery"><img src="images/resource/inventory1-7.png" alt=""></a></figure>

                                </div>
                            </div>
                            <div class="content-box">
                                <ul class="video-list">
                                    <li><a href="https://www.youtube.com/watch?v=7e90gBu4pas" data-fancybox="gallery2"><img src="images/resource/video1-1.svg">Video</a></li>
                                    <li><a href="#"><img src="images/resource/video1-2.svg">360 View</a></li>
                                    <li><a href="images/resource/inventory1-7.png" data-fancybox="gallery"><img src="images/resource/video1-4.svg">All Photos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- description-sec -->
                    <div class="description-sec">
                        <h4 class="title">Description</h4>
                        <div class="text two">Quisque imperdiet dignissim enim dictum finibus.
                            Sed consectetutr convallis enim eget laoreet. Aenean vitae nisl
                            mollis, porta risus vel, dapibus lectus. Etiam ac suscipit eros,
                            eget maximus
                        </div>
                        <div class="text">Etiam sit amet ex pharetra, venenatis ante vehicula,
                            gravida sapien. Fusce eleifend vulputate nibh, non cursus augue placerat
                            pellentesque. Sed venenatis risus nec felis mollis, in pharetra urna euismod.
                            Morbi aliquam ut turpis sit amet ultrices. Vestibulum mattis blandit nisl,
                            et tristique elit scelerisque nec. Fusce eleifend laoreet dui eget aliquet.
                            Ut rutrum risus et nunc pretium scelerisque.
                        </div>
                        <ul class="des-list">
                            <li><a href="#"><img src="images/resource/book1-1.svg">View Vin Report</a></li>
                            <li class="two"><a href="#"><img src="images/resource/book1-2.svg">Car Brochure</a></li>
                        </ul>
                    </div>
                    <!-- features-sec -->
                    <div class="features-sec v2">
                        <h4 class="title">Features</h4>
                        <div class="row">
                            <!-- list-column -->
                            <div class="list-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title">Interior</h6>
                                    <ul class="feature-list">
                                        <li><i class="fa-solid fa-check"></i>Air Conditioner</li>
                                        <li><i class="fa-solid fa-check"></i>Digital Odometer</li>
                                        <li><i class="fa-solid fa-check"></i>Leather Seats</li>
                                        <li><i class="fa-solid fa-check"></i>Heater</li>
                                        <li><i class="fa-solid fa-check"></i>Tachometer</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- list-column -->
                            <div class="list-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title">Exterior</h6>
                                    <ul class="feature-list">
                                        <li><i class="fa-solid fa-check"></i>Fog Lights Front</li>
                                        <li><i class="fa-solid fa-check"></i>Rain Sensing Wipe</li>
                                        <li><i class="fa-solid fa-check"></i>Rear Spoiler</li>
                                        <li><i class="fa-solid fa-check"></i>Sun Roof</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- list-column -->
                            <div class="list-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title">Safety</h6>
                                    <ul class="feature-list">
                                        <li><i class="fa-solid fa-check"></i>Brake Assist</li>
                                        <li><i class="fa-solid fa-check"></i>Child Safety Locks</li>
                                        <li><i class="fa-solid fa-check"></i>Traction Control</li>
                                        <li><i class="fa-solid fa-check"></i>Power Door Locks</li>
                                        <li><i class="fa-solid fa-check"></i>Driver Air Bag</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- list-column -->
                            <div class="list-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <h6 class="title">Comfort & Convenience</h6>
                                    <ul class="feature-list">
                                        <li><i class="fa-solid fa-check"></i>Power Steering</li>
                                        <li><i class="fa-solid fa-check"></i>Vanity Mirror</li>
                                        <li><i class="fa-solid fa-check"></i>Trunk Light</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- faq-section -->
                    <div class="faqs-section pt-0">
                        <div class="inner-container">
                            <!-- FAQ Column -->
                            <h4 class="title">Specifications</h4>
                            <div class="faq-column wow fadeInUp" data-wow-delay="400ms">
                                <div class="inner-column">
                                    <ul class="widget-accordion wow fadeInUp">
                                        <!--Block-->
                                        <li class="accordion block active-block">
                                            <div class="acc-btn active">DEngine and Transmission<div class="icon fa fa-angle-down"></div></div>
                                            <div class="acc-content current">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                            <div class="inner-column">
                                                                <ul class="spects-list">
                                                                    <li><span>Length</span>4950mm</li>
                                                                    <li><span>Height</span>1776mm</li>
                                                                    <li><span>Front Tread</span>1668mm</li>
                                                                    <li><span>Kerb Weight</span>2350</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                            <div class="inner-column">
                                                                <ul class="spects-list">
                                                                    <li><span>Width</span>2140mm</li>
                                                                    <li><span>Wheel Base</span>2984mm</li>
                                                                    <li><span>Rear Tread</span>1671mm</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn">Dimensions & Capacity<div class="icon fa fa-angle-down"></div></div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                            <div class="inner-column">
                                                                <ul class="spects-list">
                                                                    <li><span>Length</span>4950mm</li>
                                                                    <li><span>Height</span>1776mm</li>
                                                                    <li><span>Front Tread</span>1668mm</li>
                                                                    <li><span>Kerb Weight</span>2350</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                            <div class="inner-column">
                                                                <ul class="spects-list">
                                                                    <li><span>Width</span>2140mm</li>
                                                                    <li><span>Wheel Base</span>2984mm</li>
                                                                    <li><span>Rear Tread</span>1671mm</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block v2">
                                            <div class="acc-btn">Miscellaneous<div class="icon fa fa-angle-down"></div></div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                            <div class="inner-column">
                                                                <ul class="spects-list">
                                                                    <li><span>Length</span>4950mm</li>
                                                                    <li><span>Height</span>1776mm</li>
                                                                    <li><span>Front Tread</span>1668mm</li>
                                                                    <li><span>Kerb Weight</span>2350</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="list-column col-lg-6 col-md-6 col-sm-12">
                                                            <div class="inner-column">
                                                                <ul class="spects-list">
                                                                    <li><span>Width</span>2140mm</li>
                                                                    <li><span>Wheel Base</span>2984mm</li>
                                                                    <li><span>Rear Tread</span>1671mm</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End faqs-section -->
                    <div class="location-box">
                        <h4 class="title">Location</h4>
                        <div class="text">Ford Shirley, 361 - 369 Stratford Road, Shirley, Solihull, B90 3BS
                            Open today 9am - 6pm
                        </div>
                        <a href="#" class="brand-btn">Get Directions<svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewbox="0 0 15 14" fill="none">
                                <g clip-path="url(#clip0_881_14440)">
                                    <path d="M14.1111 0H5.55558C5.34062 0 5.16668 0.173943 5.16668 0.388901C5.16668 0.603859 5.34062 0.777802 5.55558 0.777802H13.1723L0.613941 13.3362C0.46202 13.4881 0.46202 13.7342 0.613941 13.8861C0.689884 13.962 0.789415 14 0.88891 14C0.988405 14 1.0879 13.962 1.16388 13.8861L13.7222 1.3277V8.94447C13.7222 9.15943 13.8962 9.33337 14.1111 9.33337C14.3261 9.33337 14.5 9.15943 14.5 8.94447V0.388901C14.5 0.173943 14.3261 0 14.1111 0Z" fill="#405FF2"></path>
                                </g>
                                <defs>
                                    <clippath id="clip0_881_14440">
                                        <rect width="14" height="14" fill="white" transform="translate(0.5)"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                        </a>
                        <div class="goole-iframe">
                            <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed">
                            </iframe>
                        </div>
                    </div>
                    <div class="contact-box-three">
                        <div class="icon-box">
                            <img src="images/resource/volvo1-2.svg">
                        </div>
                        <div class="content-box">
                            <div class="inner-box">
                                <h6 class="title">Volvo Cars Marin</h6>
                                <div class="text">619 Francisco Blvd E, San Rafael, CA 94901</div>
                                <ul class="contact-list">
                                    <li><a href="#"><div class="image-box"><img src="images/resource/phone1-1.svg"></div>Get Directions</a></li>
                                    <li><a href="#"><div class="image-box"><img src="images/resource/phone1-2.svg"></div>+76 956 039 967</a></li>
                                </ul>
                            </div>
                            <div class="btn-box">
                                <a href="#" class="side-btn">Message Dealer<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_881_7563)">
                                            <path d="M13.6111 0H5.05558C4.84062 0 4.66668 0.173943 4.66668 0.388901C4.66668 0.603859 4.84062 0.777802 5.05558 0.777802H12.6723L0.113941 13.3362C-0.0379805 13.4881 -0.0379805 13.7342 0.113941 13.8861C0.189884 13.962 0.289415 14 0.38891 14C0.488405 14 0.5879 13.962 0.663879 13.8861L13.2222 1.3277V8.94447C13.2222 9.15943 13.3962 9.33337 13.6111 9.33337C13.8261 9.33337 14 9.15943 14 8.94447V0.388901C14 0.173943 13.8261 0 13.6111 0Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_881_7563">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="#" class="side-btn two">Chat Via Whatsapp<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_881_8744)">
                                            <path d="M13.6111 0H5.05558C4.84062 0 4.66668 0.173943 4.66668 0.388901C4.66668 0.603859 4.84062 0.777802 5.05558 0.777802H12.6723L0.113941 13.3362C-0.0379805 13.4881 -0.0379805 13.7342 0.113941 13.8861C0.189884 13.962 0.289415 14 0.38891 14C0.488405 14 0.5879 13.962 0.663879 13.8861L13.2222 1.3277V8.94447C13.2222 9.15943 13.3962 9.33337 13.6111 9.33337C13.8261 9.33337 14 9.15943 14 8.94447V0.388901C14 0.173943 13.8261 0 13.6111 0Z" fill="#60C961"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_881_8744">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="#" class="side-btn-three">View all stock at this dealer<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_881_10193)">
                                            <path d="M13.6111 0H5.05558C4.84062 0 4.66668 0.173943 4.66668 0.388901C4.66668 0.603859 4.84062 0.777802 5.05558 0.777802H12.6723L0.113941 13.3362C-0.0379805 13.4881 -0.0379805 13.7342 0.113941 13.8861C0.189884 13.962 0.289415 14 0.38891 14C0.488405 14 0.5879 13.962 0.663879 13.8861L13.2222 1.3277V8.94447C13.2222 9.15943 13.3962 9.33337 13.6111 9.33337C13.8261 9.33337 14 9.15943 14 8.94447V0.388901C14 0.173943 13.8261 0 13.6111 0Z" fill="#050B20"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_881_10193">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-box">
                        <h4 class="title">Financing Calculator</h4>
                        <form class="row">
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label>Vehicle Price ($)</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>$25.000</span>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>$25.000</li>
                                            <li>$25.000</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label>Interest rate (%)</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>4</span>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>4</li>
                                            <li>4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label>Period (month)</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>36</span>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>36</li>
                                            <li>36</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label>Down Payment ($)</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>4000</span>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>4000</li>
                                            <li>4000</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn">Calculate<img src="images/arrow.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </form>
                        <ul class="form-list">
                            <li><span>Monthly Payment</span>$687.70</li>
                            <li><span>Total Amount to Pay</span>$687.70</li>
                            <li><span>Total Interest Payment</span>$687.70</li>
                        </ul>
                    </div>
                    <div class="review-sec v2">
                        <h4 class="title">Customer Reviews</h4>
                        <div class="review-box">
                            <div class="rating-box">
                                <div class="content-box">
                                    <span>Overall Rating</span>
                                    <h3 class="title">4.8</h3>
                                    <small>Out Of 5</small>
                                </div>
                            </div>
                            <div class="content-box-three">
                                <ul class="review-list two">
                                    <li>
                                        <div class="review-title">
                                            <span>Comfort</span>
                                            <small>Excellent</small>
                                        </div>
                                        <sub><i class="fa fa-star"></i>5.0</sub>
                                    </li>
                                    <li>
                                        <div class="review-title">
                                            <span>Performance</span>
                                            <small>Excellent</small>
                                        </div>
                                        <sub><i class="fa fa-star"></i>5.0</sub>
                                    </li>
                                    <li>
                                        <div class="review-title">
                                            <span>Exterior styling</span>
                                            <small>Excellent</small>
                                        </div>
                                        <sub><i class="fa fa-star"></i>5.0</sub>
                                    </li>
                                </ul>
                                <ul class="review-list">
                                    <li>
                                        <div class="review-title">
                                            <span>Interior design</span>
                                            <small>Excellent</small>
                                        </div>
                                        <sub><i class="fa fa-star"></i>5.0</sub>
                                    </li>
                                    <li>
                                        <div class="review-title">
                                            <span>Value for the money</span>
                                            <small>Excellent</small>
                                        </div>
                                        <sub><i class="fa fa-star"></i>5.0</sub>
                                    </li>
                                    <li>
                                        <div class="review-title">
                                            <span>Reliability</span>
                                            <small>Excellent</small>
                                        </div>
                                        <sub><i class="fa fa-star"></i>5.0</sub>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="reviews">
                        <div class="content-box">
                            <div class="auther-name">
                                <span>A.T</span>
                                <h6 class="name">Ali Tufan</h6>
                                <small>April 2023</small>
                            </div>
                            <div class="rating-list">
                                <ul class="list">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Take this tour!--its fantastic!</span>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam.
                            </div>
                            <div class="image-box">
                                <img src="images/resource/blog5-4.jpg">
                                <img src="images/resource/blog5-5.jpg">
                                <img src="images/resource/blog5-6.jpg">
                            </div>
                            <div class="btn-box">
                                <a href="#" class="like-btn"><i class="fa-solid fa-thumbs-up"></i>Helpful</a>
                                <a href="#" class="like-btn"><i class="fa-solid fa-thumbs-down"></i>Not helpful</a>
                            </div>
                        </div>
                        <div class="content-box two">
                            <div class="auther-name">
                                <span>A.T</span>
                                <h6 class="name">Ali Tufan</h6>
                                <small>April 2023</small>
                            </div>
                            <div class="rating-list">
                                <ul class="list">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Take this tour!--its fantastic!</span>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident.
                            </div>
                            <div class="btn-box">
                                <a href="#" class="like-btn"><i class="fa-solid fa-thumbs-up"></i>Helpful</a>
                                <a href="#" class="like-btn"><i class="fa-solid fa-thumbs-down"></i>Not helpful</a>
                            </div>
                            <a href="#" class="review">See more reviews<svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewbox="0 0 15 14" fill="none">
                                    <g clip-path="url(#clip0_881_13248)">
                                        <path d="M14.1106 0H5.55509C5.34013 0 5.16619 0.173943 5.16619 0.388901C5.16619 0.603859 5.34013 0.777802 5.55509 0.777802H13.1719L0.613453 13.3362C0.461531 13.4881 0.461531 13.7342 0.613453 13.8861C0.689396 13.962 0.788927 14 0.888422 14C0.987917 14 1.08741 13.962 1.16339 13.8861L13.7218 1.3277V8.94447C13.7218 9.15943 13.8957 9.33337 14.1107 9.33337C14.3256 9.33337 14.4996 9.15943 14.4996 8.94447V0.388901C14.4995 0.173943 14.3256 0 14.1106 0Z" fill="#405FF2"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_881_13248">
                                            <rect width="14" height="14" fill="white" transform="translate(0.5)"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="Reply-sec">
                        <h6 class="title">Leave a Reply</h6>
                        <div class="text">Your email address will not be published. Required fields are marked *</div>
                        <div class="right-box">
                            <div class="rating-list two">
                                <div class="list-box">
                                    <span>Comfort</span>
                                    <ul class="list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="list-box">
                                    <span>Exterior Styling</span>
                                    <ul class="list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="list-box">
                                    <span>Performance</span>
                                    <ul class="list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rating-list">
                                <div class="list-box">
                                    <span>Interior Design</span>
                                    <ul class="list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="list-box">
                                    <span>Value For The Money</span>
                                    <ul class="list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="list-box">
                                    <span>Reliability</span>
                                    <ul class="list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="row">
                        <div class="col-lg-6">
                            <div class="form_boxes">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Ali Tufan">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form_boxes">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Creativelayers088@Gmail.Com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form_boxes">
                                <label>Title</label>
                                <input type="text" name="title" placeholder="Good Cars">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form_boxes v2">
                                <label>Comment</label>
                                <textarea name="message" placeholder="Lorem Ipsum Dolar Sit Amet" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-submit">
                                <button type="submit" class="theme-btn">Post Comment <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_711_3214)">
                                            <path d="M13.6106 0H5.05509C4.84013 0 4.66619 0.173943 4.66619 0.388901C4.66619 0.603859 4.84013 0.777802 5.05509 0.777802H12.6719L0.113453 13.3362C-0.0384687 13.4881 -0.0384687 13.7342 0.113453 13.8861C0.189396 13.962 0.288927 14 0.388422 14C0.487917 14 0.587411 13.962 0.663391 13.8861L13.2218 1.3277V8.94447C13.2218 9.15943 13.3957 9.33337 13.6107 9.33337C13.8256 9.33337 13.9996 9.15943 13.9996 8.94447V0.388901C13.9995 0.173943 13.8256 0 13.6106 0Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_711_3214">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="side-bar-column v2 v3 col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="contact-box-two">
                        <div class="content-box">
                            <h2>Volvo XC90</h2>
                            <div class="text">2.0 D5 PowerPulse Momentum 5dr AWD Geartronic Estate</div>
                            <ul class="list">
                                <li>26,786 kms</li>
                                <li>Petrol</li>
                                <li>Automatic</li>
                            </ul>
                        </div>
                        <span>Our Price</span>
                        <h3 class="title">$45,900</h3>
                        <small>Instant Saving : $7.000</small>
                        <div class="btn-box">
                            <a href="#" class="side-btn"><img src="images/resource/tag.svg">Make An Offer Price</a>
                            <a href="#" class="side-btn two"><img src="images/resource/tag1-1.svg">Schedule Test Drive</a>
                        </div>
                    </div>
                    <!-- overview-sec -->
                    <div class="overview-box">
                        <h4 class="title">Car Overview</h4>
                        <ul class="list">
                            <li><span><img src="images/resource/insep1-1.svg">Body</span>SUV</li>
                            <li><span><img src="images/resource/insep1-2.svg">Mileage</span>28.000 miles</li>
                            <li><span><img src="images/resource/insep1-3.svg">Fuel Type</span>Petrol</li>
                            <li><span><img src="images/resource/insep1-4.svg">Year</span>2023</li>
                            <li><span><img src="images/resource/insep1-5.svg">Transmission</span>Automatics</li>
                            <li><span><img src="images/resource/insep1-6.svg">Drive Type</span>Front Wheel Drive</li>
                            <li><span><img src="images/resource/insep1-7.svg">Condition</span>Used</li>
                            <li><span><img src="images/resource/insep1-8.svg">Engine Size</span>4.8L</li>
                            <li><span><img src="images/resource/insep1-9.svg">Doors</span>5-door</li>
                            <li><span><img src="images/resource/insep1-10.svg">Cylinders</span>6</li>
                            <li><span><img src="images/resource/insep1-11.svg">Color</span>Blue</li>
                            <li><span><img src="images/resource/insep1-12.svg">VIN</span>ZN682AVA2P7429564</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cars-section-three -->
    <div class="cars-section-three">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Related Listings</h2>
                <a href="#" class="btn-title">View All<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_601_243)">
                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#050B20"></path>
                        </g>
                        <defs>
                            <clippath id="clip0_601_243">
                                <rect width="14" height="14" fill="white"></rect>
                            </clippath>
                        </defs>
                    </svg>
                </a>
            </div>

            <div class="row car-slider-three" data-preview="4">
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box two">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></figure>
                            <span>Great Price</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-1.jpg" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box two">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></figure>
                            <span>Great Price</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                            <ul>
                                <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                <li><i class="flaticon-speedometer"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End shop section two -->
</section>
<!-- End inventory-section -->

@endsection
