<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--meta data for csrf laravel -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
   
   
    <!--stripe script -->

    <script src="https://js.stripe.com/v3/"></script>


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
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fas fa-pizza-slice"></i> Boite/Pizza</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                    
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
 
    
    <!-- Hero Section End -->

    
    <div class="row col-md-12">
            
            <div class="col-md-3">
               
            </div>
            <div class="col-md-6 border border-secondary">
                <form action="{{route('payment.store')}}"  method="POST" id="payment-form" class="my-4">
                    @csrf
                    <div id="card-element">
                      <!-- Elements will create input elements here -->
                    </div>
                    <!-- We'll put the error messages in this element -->
                    <div id="card-errors" role="alert"></div>
                    <hr>
                    <h3 class="mb-2">secteur :</h3>
                    <div class="form-group form-check">
                        <input type="text" name="secteur" class="form-control" id="secteur" >  
                    </div>    
                    <hr>
                    <h3 class="mb-2">Adresse de livraison :</h3>
                    <div class="form-group form-check">
                        <input type="text" name="adress" class="form-control" id="adress" >  
                    </div>    
                    <hr>           
                    <button class='btn btn-success col-lg-12' id="submit">Pay</button>
                    </form>
                </div>
            </form>
            </div>
            <div class="col-md-3">
            </div>
    </div>

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script>

    // Set your publishable key: remember to change this to your live publishable key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    var stripe = Stripe('pk_test_ir4zxzuthQOiUDOBZBuxH64j00oOr4oZVi');
    var elements = stripe.elements();



    var style = {
                base: {
                color: "#32325d",
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#aab7c4"
                }
                },
                invalid: {
                color: "#fa755a",
                iconColor: "#fa755a"
                }
    };
    var card = elements.create("card", { style: style });
    card.mount("#card-element");

    card.on('change', ({error}) => {
    const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('alert','alert-danger');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('alert','alert-danger');
            displayError.textContent = '';
        }
    });

    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(ev) {
    ev.preventDefault();
    stripe.confirmCardPayment("{{$clientsecret}}", {
        payment_method: {
        card: card,
       
        }
    }).then(function(result) {
        if (result.error) {
        // Show error to your customer (e.g., insufficient funds)
        console.log(result.error.message);
        } else {
        // The payment has been processed!
        if (result.paymentIntent.status === 'succeeded') {
            var paymentIntent=result.paymentIntent;
            var form = document.getElementById('payment-form');
            var url= form.action;
            var secteur=document.getElementById('secteur').value;
            var adress=document.getElementById('adress').value;

             redirect="/remerciement";
           
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch(
                url,
                {
                    headers:{
                        "Content-type":"application/json",
                        "Accept":"application/json, text-plain,*/*",
                        "X-Requested-With":"XMLHttpRequest",
                        "X-CSRF-TOKEN":token
                    },
                    method:"POST",
                    body:JSON.stringify({
                    paymentIntent:paymentIntent,
                    secteur:secteur,
                    adress:adress,

                })
                }
                ).then((data)=>{
                    console.log(data) 
                    window.location.href= ""; 
                }).catch((error)=>{
                    console.log(error)
                })
        }
        }
    });
    });
    </script>

</body>

</html>