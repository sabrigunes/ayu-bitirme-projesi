@extends('layout')

@section('title', "Anasayfa | ".$settings->title)

@section('content')
    <form action="" method="get">
        <section class="inventory-pager style-1">
            <div class="boxcar-container">
                <div class="inventory-form">
                    <div class="form_boxes line-r">
                        <div class="drop-menu">
                            <div class="select">
                                <span id="input1">Kasa Tipi</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <input type="hidden" name="body_type" id="real_input1">
                            <ul class="dropdown" style="display: none;">
                                @foreach($categories as $category)
                                    <li>{{ $category->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form_boxes line-r">
                        <div class="drop-menu">
                            <div class="select">
                                <span id="input2">Markalar</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <input type="hidden" name="brand" id="real_input2">
                            <ul class="dropdown" style="display: none;">
                                @foreach($brands as $brand)
                                    <li>{{ $brand->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form_boxes line-r">
                        <div class="drop-menu">
                            <div class="select">
                                <span id="input3">Yakıt Türü</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <input type="hidden" name="fuel_type" id="real_input3">
                            <ul class="dropdown" style="display: none;">
                                @foreach($fuel_types as $fuel_type)
                                    <li>{{ $fuel_type }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form_boxes line-r">
                        <div class="drop-menu">
                            <div class="select">
                                <span id="input4">Vites Tipi</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <input type="hidden" name="transmission" id="real_input4">
                            <ul class="dropdown" style="display: none;">
                                @foreach($transmission_types as $transmission)
                                    <li>{{ $transmission }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form_boxes">
                        <a href="#" title="" class="filter-popup"><img src="images/icons/filter.svg" alt=""/> Tüm
                            Seçenekler</a>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="theme-btn" id="submit_button"><i class="flaticon-search"></i> Aramayı Başlat</button>
                    </div>
                </div>
            </div>
        </section><!--inventory-pager end-->

        <div class="wrap-fixed-sidebar">
            <div class="sidebar-backdrop"></div>
            <div class="widget-sidebar-filter">
                <div class="fixed-sidebar-title">
                    <h3>Tüm Seçenekler</h3>
                    <a href="#" title="" class="close-filters"><img src="images/icons/close.svg" alt=""/></a>
                </div>
                <div class="inventory-sidebar">
                    <div class="inventroy-widget widget-location">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form_boxes">
                                    <label>Durum</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span id="input5">Şehirler</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="city" id="real_input5">
                                        <ul class="dropdown" style="display: none;">
                                             @foreach($cities as $city)
                                                <li>{{ $city->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_boxes">
                                    <label>Durum</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span id="input6">Sıfır ve İkinci El</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="status" id="real_input6">
                                        <ul class="dropdown" style="display: none;">
                                            <li>Sıfır ve İkinci El</li>
                                            <li>İkinci El</li>
                                            <li>Sıfır</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label>Minimum Yıl</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span id="input7">{{ $min_year }}</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="min_year" id="real_input7">
                                        <ul class="dropdown" style="display: none;">
                                            @for($i=$min_year;$i<\Carbon\Carbon::now()->year;$i++)
                                                <li>{{ $i }}</li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_boxes">
                                    <label>Maksimum Yıl</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span id="input8">{{ \Carbon\Carbon::now()->year }}</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="max_year" id="real_input8">
                                        <ul class="dropdown" style="display: none;">
                                            @for($i=$min_year;$i<\Carbon\Carbon::now()->year;$i++)
                                                <li>{{ $i }}</li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_boxes">
                                    <label>Çekiş Türü</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span id="input9">Farketmez</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="drivetrain" id="real_input9">
                                        <ul class="dropdown" style="display: none;">
                                            @foreach($drivetrain as $d)
                                                <li>{{ $d }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_boxes">
                                    <label>Renk</label>
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span id="input10">Farketmez</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="color" id="real_input10">
                                        <ul class="dropdown" style="display: none;">
                                            @foreach($colors as $color)
                                                <li>{{ $color }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="price-box">
                                    <h6 class="title">Ücret</h6>
                                    <form class="row g-0">
                                        <div class="form-column col-lg-5">
                                            <div class="form_boxes">
                                                <label>Minimum</label>
                                                <div class="drop-menu">
                                                    <!-- <input type="text" id="slider-range-value1" name="gender"> -->
                                                    <span id="slider-range-value1"></span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-column v2 col-lg-5">
                                            <div class="form_boxes">
                                                <label>Maksimum</label>
                                                <div class="drop-menu">
                                                    <span id="slider-range-value2"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="widget-price">

                                        <div id="slider-val"></div>
                                        <div class="slider-labels">
                                            <input type="hidden" name="min-value" value="">
                                            <input type="hidden" name="max-value" value="">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div><!--widget end-->
                </div>
            </div>

        </div>
    </form>

    <!-- cars-section-three -->
    <section class="cars-section-four v1 layout-radius">
        <div class="boxcar-container">
            <div class="boxcar-title-three wow fadeInUp">
                <h2>Satılık Sıfır ve İkinci El Araçlar</h2>
            </div>
            {{--
            <div class="text-box">
                <div class="text">Showing 1 to 16 of 1559 vehicles</div>
                <form>
                    <div class="form_boxes v3">
                        <small>Sıralama</small>
                        <div class="drop-menu">
                            <div class="select">
                                <span id="order">Akıllı Sıralama</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <input type="hidden" name="order">
                            <ul class="dropdown" style="display: none;">
                                <li>Fiyata Göre Artan</li>
                                <li>Fiyata Göre Azalan</li>
                                <li>Önce En Yeni İlan</li>
                                <li>Önce En Eski İlan</li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            --}}
            <div class="row wow fadeInUp">
                <!-- car-block-four -->
                @foreach($cars as $car)
                    <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{ route("get_car_page", \App\Models\Car::getUrl($car->id)) }}"><img src="@if (isset($car->images[0]->image)) {{ 'uploads/'.$car->images[0]->image }} @else /images/error.png @endif" style="max-width: 90%;" alt=""></a>
                                </figure>
                                @if($car->kilometers == 0)<span>Sıfır Kilometre</span>@endif
                            </div>
                            <div class="content-box">
                                <h6 class="title"><a href="{{ route("get_car_page", \App\Models\Car::getUrl($car->id)) }}">{{ $car->title }}</a></h6>
                                <div class="text"></div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>{{ number_format(intval($car->kilometers),0, ',', '.') }} km</li>
                                    <li><i class="flaticon-speedometer"></i>{{ $car->fuel_type }}</li>
                                    <li><i class="flaticon-gearbox"></i>{{ $car->transmission }}</li>
                                </ul>
                                <div class="btn-box">
                                    <small>{{ number_format(intval($car->price),0, ',', '.') }} TL</small>
                                    <a href="{{ route("get_car_page", \App\Models\Car::getUrl($car->id)) }}" class="details">Görüntüle
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                             fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="pagination-sec">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.57983 5.99989C2.57983 5.7849 2.66192 5.56987 2.82573 5.4059L7.98559 0.24617C8.31382 -0.0820565 8.84598 -0.0820565 9.17408 0.24617C9.50217 0.574263 9.50217 1.10632 9.17408 1.43457L4.60841 5.99989L9.17376 10.5654C9.50185 10.8935 9.50185 11.4256 9.17376 11.7537C8.84566 12.0821 8.31366 12.0821 7.98544 11.7537L2.82555 6.59404C2.66176 6.42999 2.57983 6.21495 2.57983 5.99989Z"
                                        fill="#050B20"/>
                                </svg>
                          </span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">20</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2880_6407)">
                                    <path
                                        d="M9.42017 6.00011C9.42017 6.2151 9.33808 6.43013 9.17427 6.5941L4.01441 11.7538C3.68618 12.0821 3.15402 12.0821 2.82592 11.7538C2.49783 11.4257 2.49783 10.8937 2.82592 10.5654L7.39159 6.00011L2.82624 1.43461C2.49815 1.10652 2.49815 0.574382 2.82624 0.246315C3.15434 -0.0820709 3.68634 -0.0820709 4.01457 0.246315L9.17446 5.40596C9.33824 5.57001 9.42017 5.78505 9.42017 6.00011Z"
                                        fill="#050B20"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_2880_6407">
                                    <rect width="12" height="12" fill="white"
                                          transform="translate(12 12) rotate(-180)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                          </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                    <div class="text">Showing results 1-30 of 1,415</div>
                </nav>
            </div>
        </div>
    </section>
    <!-- End shop section two -->
@endsection

@section('js')
    <script>
        for (let i = 1; i <= 10; i++) {
            const submitButton = document.getElementById('submit_button');
            const spanElement = document.getElementById('input' + i);
            const inputElement = document.getElementById('real_input' + i);

            submitButton.addEventListener('click', function(event) {
                if (spanElement.classList.contains('selected')) {
                    inputElement.value = spanElement.textContent || spanElement.innerText;
                }
            });
        }

          function redirectPage() {
    // 'selected' sınıfı ekleniyor
    document.getElementById('order').classList.add('selected');

    // Yönlendirme işlemi
    window.location.href = "https://yeni-sayfa.com"; // Burada yönlendirilmek istenen URL'yi belirtin
  }
    </script>
@endsection
