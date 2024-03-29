<div class="popup-wrapper">
    <div class="bg-layer"></div>

    <div class="popup-content" data-rel="1">
        <div class="layer-close"></div>
        <div class="popup-container size-1">
            <div class="popup-align">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                <h3 class="h3 text-center">Ingresar</h3>
                <div class="empty-space col-xs-b30"></div>
                <div>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="simple-input @error('email') is-invalid @enderror"  placeholder="Email"  required autocomplete="email" autofocus/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <div>
                    <input id="password" name="password" class="simple-input  @error('password') is-invalid @enderror" type="password" placeholder="Enter password" required autocomplete="current-password"/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <div class="row">
                    <div class="col-sm-6 col-xs-b10 col-sm-b0">
                        <div class="empty-space col-sm-b5"></div>
                        <a class="simple-link">¿Olvidate contraseña?</a>
                        <div class="empty-space col-xs-b5"></div>
                        <a class="open-popup" data-rel="2">Registrar ahora</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        {{-- <a class="button size-2 style-3" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">submit</span>
                            </span>
                        </a>   --}}
                    </div>
                </div>
                <div class="popup-or">
                    <span>or</span>
                </div>
                <div class="row m5">
                    <div class="col-sm-4 col-xs-b10 col-sm-b0">
                        <a class="button facebook-button size-2 style-4 block" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">facebook</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-b10 col-sm-b0">
                        <a class="button twitter-button size-2 style-4 block" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">twitter</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="button google-button size-2 style-4 block" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">google+</span>
                            </span>
                        </a>
                    </div>
                </div>
                </form>
            </div>
            <div class="button-close"></div>
        </div>
    </div>
{{-- 
    <div class="popup-content" data-rel="2">
        <div class="layer-close"></div>
        <div class="popup-container size-1">
            <div class="popup-align">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <h3 class="h3 text-center">Registrar</h3>
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <div>
                    <input id="name"  placeholder="Nombre" class="simple-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <div>
                    <input id="email" name="email" placeholder="Email" class="simple-input @error('email') is-invalid @enderror " type="email" value="{{ old('email') }}" required autocomplete="email"  />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <div>
                    <input id="password" name="password" class="simple-input @error('password') is-invalid @enderror" type="password"  placeholder="Contraseña" required autocomplete="new-password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <div>
                    <input id="password-confirm" name="password_confirmation" class="simple-input" type="password"  placeholder="Repetir contraseña"   required autocomplete="new-password"/>
                </div>
                <div class="empty-space col-xs-b10 col-sm-b20"></div>

                <div class="row">
                    <div class="col-sm-7 col-xs-b10 col-sm-b0">
                        <div class="empty-space col-sm-b15"></div>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span><a href="#">Privacy policy agreement</a></span>
                        </label>
                    </div>
                    <div class="col-sm-5 text-right">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <a class="button size-2 style-3" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">Registrar</span>
                            </span>
                        </a>  
                    </div>
                </div>
                <div class="popup-or">
                    <span>or</span>
                </div>
                <div class="row m5">
                    <div class="col-sm-4 col-xs-b10 col-sm-b0">
                        <a class="button facebook-button size-2 style-4 block" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">facebook</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-b10 col-sm-b0">
                        <a class="button twitter-button size-2 style-4 block" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">twitter</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="button google-button size-2 style-4 block" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{asset('web/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">google+</span>
                            </span>
                        </a>
                    </div>
                </div>
                </form>
            </div>
            <div class="button-close"></div>
        </div>
    </div> --}}

    <div class="popup-content" data-rel="3">
        <div class="layer-close"></div>
        <div class="popup-container size-2">
            <div class="popup-align">
                <div class="row">
                    <div class="col-sm-6 col-xs-b30 col-sm-b0">
                        
                        <div class="main-product-slider-wrapper swipers-couple-wrapper">
                            <div class="swiper-container swiper-control-top">
                               <div class="swiper-button-prev hidden"></div>
                               <div class="swiper-button-next hidden"></div>
                               <div class="swiper-wrapper">
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="web/img/product-preview-4.jpg"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="web/img/product-preview-5.jpg"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="web/img/product-preview-6.jpg"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="web/img/product-preview-7.jpg"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="web/img/product-preview-8.jpg"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="web/img/product-preview-9.jpg"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="web/img/product-preview-10.jpg"></div>
                                   </div>
                               </div>
                            </div>

                            <div class="empty-space col-xs-b30 col-sm-b60"></div>

                            <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                               <div class="swiper-button-prev hidden"></div>
                               <div class="swiper-button-next hidden"></div>
                               <div class="swiper-wrapper">
                                   <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{asset('web/img/product-preview-4_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{asset('web/img/product-preview-5_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{asset('web/img/product-preview-6_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{asset('web/img/product-preview-7_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{asset('web/img/product-preview-8_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{asset('web/img/product-preview-9_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{asset('web/img/product-preview-10_.jpg')}}" alt="" />
                                        </div>
                                   </div>

                               </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                        <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
                        <div class="row col-xs-b25">
                            <div class="col-sm-6">
                                <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>        
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="rate-wrapper align-inline">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="simple-article size-2 align-inline">128 Reviews</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                            </div>
                        </div>
                        <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-1">size:</div>
                            </div>
                            <div class="col-sm-9">
                                <select class="SlectBox">
                                    <option disabled="disabled" selected="selected">Choose size</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title">color:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="color-selection size-1">
                                    <div class="entry active" style="color: #a7f050;"></div>
                                    <div class="entry" style="color: #50e3f0;"></div>
                                    <div class="entry" style="color: #eee;"></div>
                                    <div class="entry" style="color: #4d900c;"></div>
                                    <div class="entry" style="color: #edb82c;"></div>
                                    <div class="entry" style="color: #7d3f99;"></div>
                                    <div class="entry" style="color: #3481c7;"></div>
                                    <div class="entry" style="color: #bf584b;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-1">quantity:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="quantity-select">
                                    <span class="minus"></span>
                                    <span class="number">1</span>
                                    <span class="plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row m5 col-xs-b40">
                            <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                <a class="button size-2 style-2 block" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="{{asset('web/img/icon-2.png')}}" alt=""></span>
                                        <span class="text">add to cart</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a class="button size-2 style-1 block noshadow" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                    <span class="text">add to favourites</span>
                                </span>
                            </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-2">share:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="follow light">
                                    <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

</div>
