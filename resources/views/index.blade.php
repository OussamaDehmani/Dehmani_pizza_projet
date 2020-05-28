<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boit | Pizza</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{asset('img/language.png')}}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fas fa-pizza-slice"></i> Boite/Pizza</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        @if(session('succes'))
                        <div class="alert alert-success text-center">
                            {{session('succes')}}
                        
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__top__right">
                          <!--  <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>-->
                           
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span></span></a></li>
                            <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-bag"></i> <span>{{Cart::count()}}</span></a></li>
                        </ul>
                       <!-- <div class="header__cart__price">item: <span>$150.00</span></div>-->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                        @foreach($categorie as $cat)
                            <li><a href="#">{{$cat->name}}</a></li>
                        @endforeach    
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+212640000</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('img/salade.png')}}">
                        <div class="hero__text">
                         <!--   <span>Essayez la</span> -->
                            <h2>Salade <br />Délicieuse</h2>
                           <!-- <p>Free Pickup and Delivery Available</p>-->
                            <a href="#" class="primary-btn">DEMANDE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
            
         <!--   <div class="sidebar__item col-lg-3">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
             </div>-->
             <div class="categories__slider owl-carousel col-lg-12">
             @foreach($formule as $f)
                    <div class="card mx-md "  >
                        <img class="card-img-top" src="{{$f->img}}" alt="Card image cap" style="width: 100%; height: 200px;">
                        <div class="card-body ">
                            <div class="card-title alert alert-primary " >{{$f->nomFormule}}</div>
                            <p class="card-text ">
                                <ul>
                                    @foreach($f->produit as $p)
                                    <li >{{$p->nom}}</li>
                                    @endforeach
                                </ul>
                            </p>
                            <form action="{{route('cart.storeformule')}}" method="POST" >
                                 @csrf  
                                 <input type="hidden" name="id" value="{{$f->id}}">
                            <button type='submit' class="btn btn-success"><i class="fa fa-shopping-cart"></i><span> {{$f->prix}} $</span></button>
                            </form>
                        </div>
                    </div>
            @endforeach       
            </div>
            
            
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Pizza">Nos Pizza</li>
                            <li data-filter=".Tacos">Nos Tacos</li>
                            <li data-filter=".Boisson">Nos Boissons</li>
                            <li data-filter=".Salade">Nos Salade</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row featured__filter">
                @foreach($produit as $i)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat {{$i->name}}">
                    <div class="featured__item product__discount__item">
                        <div class="featured__item__pic product__discount__item__pic set-bg" data-setbg="{{$i->imge}}">
                            @if(($i->remise)>0)
                            <div class=" product__discount__percent">{{$i->remise}}%</div>   
                            @endif
                            <ul class="featured__item__pic__hover">
                                <form action="{{route('cart.store')}}" method="POST" >
                                 @csrf  
                                 <input type="hidden" name="id" value="{{$i->id}}">
                                <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i></button>
                                </form>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('detail.show',$i->id)}}">{{$i->nom}}</a></h6>
                            <h5>{{$i->prix}}$</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                
              
                     
            
            
               
            </div>
        </div>
    </section>


    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Clients Comment </h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($commentaire as $c)
                <div class="col-lg-4 col-md-4 col-sm-6" >
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{$c->imge}}" style="width:300px;height:300px;">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{\Carbon\Carbon::parse($c->created_at)->diffForHumans()}}</li>
                                <li><i class="fa fa-comment-o"></i> {{$c->prenom}}</li>
                            </ul>
                            <h5><a href="#">{{$c->nom}}</a></h5>
                            <p>{!!$c->text!!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
                

            </div>
        </div>
    </section>
    <!-- Blog Section End -->

   

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>



</body>

</html>