<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Saitech-Group</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.jpg')}}">

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    </head>


    <body >

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
       
        <div class="wrapper-page" >

            <div class="card mt-5">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="{{asset('admin/assets/images/saitech.png')}}" height="50" alt="logo"></a>
                    </h3>

                    <div class="p-3">

                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" :value="old('email')" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe" required autocomplete="current-password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary btn-sm w-md waves-effect waves-light" type="submit">Connexion</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 ml-1 row">
                                @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"  class="text-gray"><i class="mdi mdi-lock"></i> Mot de passe oublié?</a>
                                    </a>
                                @endif
                                
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Vous n’avez pas de compte ? <a href="{{route('register')}}" class="font-500 font-14 text-primary font-secondary"> Inscrivez-vous </a> </p>


                <p>© @php
                    echo date('Y');
                @endphp <a href="/" class="font-500 font-14 text-primary font-secondary"> - Saitech-Group </a>.</p>
                
            </div>

        </div>


        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
</html>