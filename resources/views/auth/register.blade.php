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


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
     
        <div class="wrapper-page">

            <div class="card"> 
                <div class=" ">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="{{asset('admin/assets/images/saitech.png')}}" height="50" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                       
                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="matricule">Matricule</label>
                                <input type="matricule" class="form-control" id="matricule" name="matricule" placeholder="Votre matricule" :value="old('matricule')" required autofocus>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" :value="old('nom')" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ville">Prénom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" :value="old('prenom')" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" :value="old('email')" required autofocus>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tel">Téléphone</label>
                                        <input type="text" class="form-control" id="tel" name="tel" placeholder="Numéro de téléphone" :value="old('tel')" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" :value="old('adresse')" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_n">Date de naissance</label>
                                        <input type="date" class="form-control" id="date_n" name="date_n"  :value="old('date_n')" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lieu_n">Lieu de naissance</label>
                                        <input type="text" class="form-control" id="lieu_n" name="lieu_n" placeholder="Lieu de naissance" :value="old('lieu_n')" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="userpassword">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="password" required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirmer mot de passe</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required autocomplete="current-password">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remember_me" >
                                        {{-- <label class="custom-control-label" for="customControlInline">Se souvienir de moi</label>--}} 
                                        
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <button class="btn btn-primary btn-sm btn-block w-md waves-effect waves-light" type="submit" >Inscrire</button>
                                </div>
                            </div>

                        </form> 

                        
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Vous avez déjà un compte ? <a href="{{route('login')}}" class="font-500 font-14 text-primary font-secondary"> Connectez-vous </a> </p>

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