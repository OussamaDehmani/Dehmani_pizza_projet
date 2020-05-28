<!DOCTYPE html>


<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Boit | Pizza</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">


</head>

<body>
<!-- header-->
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
                
                    @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{session('success')}} hello
                    
                    </div>
                    @endif
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__top__right">
                    
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


  <!-- body-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-md-offset-1 border border-warning">
                @if(Cart::count()>0)
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product image</th>
                            <th>Product name</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody> 
                    @foreach($formule as $formule)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$formule->model->img}}" style="width: 100px; height: 100px;"> </a>
                                
                            </div></td>
                            <td class="col-sm-4 col-md-3">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$formule->model->nomFormule}}</a></h4>
                                    <br>
                                   <!-- <h5 class="media-heading"> by <a href="#">Brand name</a></h5>-->
                                    <span>type: </span><span class="text-success"><strong>{{$formule->options['type']}}</strong></span>
                                </div>
                            </div></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                            <div class="form-group">
                                <select name="qty" id="qty" class="form-control" data-id="{{ $formule->rowId }}" >
                                <option value=1 {{$formule->qty == 1 ? "selected" : ""}}>1</option>
                                <option value=2 {{$formule->qty == 2 ? "selected" : ""}}>2</option>
                                <option value=3 {{$formule->qty == 3 ? "selected" : ""}}>3</option>
                                <option value=4 {{$formule->qty == 4 ? "selected" : ""}}>4</option>
                                <option value=5 {{$formule->qty == 5 ? "selected" : ""}}>5</option>
                                </select>
                            </div>
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>${{$formule->subtotal()}}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                            <td class="col-sm-1 col-md-1">
                            <a href="{{route('cart.destroy',$formule->rowId)}}" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </a></td>
                        </tr>
                    @endforeach
                    @foreach($produit as $product)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$product->model->imge}}" style="width: 100px; height: 100px;"> </a>
                                
                            </div></td>
                            <td class="col-sm-4 col-md-3">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$product->model->nom}}</a></h4>
                                   <!-- <h5 class="media-heading"> by <a href="#">Brand name</a></h5>--><br>
                                    <span>type: </span><span class="text-success"><strong>{{$product->options['type']}}</strong></span>
                                </div>
                            </div></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                            <div class="form-group">
                                <select name="qty" id="qty" class="form-control" data-id="{{ $product->rowId }}" >
                                <option value=1 {{$product->qty == 1 ? "selected" : ""}}>1</option>
                                <option value=2 {{$product->qty == 2 ? "selected" : ""}}>2</option>
                                <option value=3 {{$product->qty == 3 ? "selected" : ""}}>3</option>
                                <option value=4 {{$product->qty == 4 ? "selected" : ""}}>4</option>
                                <option value=5 {{$product->qty == 5 ? "selected" : ""}}>5</option>
                                </select>
                            </div>
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>${{$product->subtotal()}}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                            <td class="col-sm-1 col-md-1">
                            <a href="{{route('cart.destroy',$product->rowId)}}" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </a></td>
                        </tr>
                    @endforeach
                    @foreach($sup as $product)
                        <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{asset('img/sauce.png')}}" style="width: 100px; height: 100px;"> </a>
                                
                            </div></td>
                            <td class="col-sm-4 col-md-3">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$product->model->nomingred}}</a></h4>
                                   <!-- <h5 class="media-heading"> by <a href="#">Brand name</a></h5>--><br>
                                    <span>type: </span><span class="text-success"><strong>{{$product->options['type']}}</strong></span>
                                </div>
                            </div></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                            <div class="form-group">
                            <select name="qty" id="qty" class="form-control" data-id="{{ $product->rowId }}" >
                                <option value=1 {{$product->qty == 1 ? "selected" : ""}}>1</option>
                                <option value=2 {{$product->qty == 2 ? "selected" : ""}}>2</option>
                                <option value=3 {{$product->qty == 3 ? "selected" : ""}}>3</option>
                                <option value=4 {{$product->qty == 4 ? "selected" : ""}}>4</option>
                                <option value=5 {{$product->qty == 5 ? "selected" : ""}}>5</option>
                                </select>
                            </div>
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>${{$product->model->prix_sup}}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                            <td class="col-sm-1 col-md-1">
                            <a href="{{route('cart.destroy',$product->rowId)}}" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                        <div class="col-lg-9 alert alert-danger">
                            Votre panier est vide!
                        </div>
                        @endif
            </div>
        </div>
<!--suppelment-->
<!-- add supplement-->
        <div class="row mb-4">
                <div class="col-lg-12 border border-primary">
                    <h3 class="mb-2">add supplements</h3>
                    <form action="{{route('cart.sup')}}" method="POST">
                    @csrf
                    @foreach($suplements as $sup)
                    <div class="form-group form-check">
                        <input type="checkbox" name="suplements[]" class="form-check-input" id="{{$sup->id}}" value="{{$sup->id}}">
                        <label class="form-check-label" for="{{$sup->id}}">{{$sup->nomingred}} {{$sup->prix_sup}}$</label>
                    </div>
                       @endforeach   
                                        
                    <!---->
                    <button type="submit" class="btn btn-success cart-btn">Add</button>
                    
                    </form>
                </div>
        </div>
<!--payement-->
        <div class="row">
               
               <div class="col-lg-6">
                   <div class="shoping__checkout">
                       <h5>Cart Total</h5>
                       <ul>
                           <li>Subtotal <span>{{Cart::subtotal()}} $</span></li>
                           <li>Total <span>{{Cart::total()}} $</span></li>
                       </ul>
                       <a href="{{route('payment.index')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                   </div>
               </div>
               
           </div>
    </div>

   
<!-- script-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<!--<script src="{{asset('js/main.js')}}"></script>-->
    <script>
   


   var qty = document.querySelectorAll('#qty');
   Array.from(qty).forEach((element) => {
       element.addEventListener('change', function () {
          // alert('changed');
           var rowId = element.getAttribute('data-id');
           var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
           fetch(`/panier/${rowId}`,
               {
                   headers: {
                       "Content-Type": "application/json",
                       "Accept": "application/json, text-plain, */*",
                       "X-Requested-With": "XMLHttpRequest",
                       "X-CSRF-TOKEN": token
                   },
                   method: 'PATCH',
                   body: JSON.stringify({
                       qty: this.value
                   })
           }).then((data) => {
               console.log(data);
               location.reload();
           }).catch((error) => {
               console.log(error);
           });
       });
   });
   </script>
</body>

</html>