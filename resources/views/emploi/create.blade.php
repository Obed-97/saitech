@extends('master')

@section('content')
<header class="header-image ken-burn-center light" data-parallax="true"  data-bleed="0" data-image-src="{{asset('media/background-6795626.png')}}" data-offset="0">
    <div class="container">
        <h1>REJOINS L'ÉQUIPE</h1>
       
    </div>
</header>
<main>
<section class="section-base section-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="boxed-area">
                    <div class="title">
                        <h2>Envoyer par mail</h2>
                    </div>
                    <ul class="text-list text-list-bold">
                        <li><b>Adresse</b><p> Magnambougou, Bamako </p></li>
                        <li><b>Email</b><p>   contact@saitech-group.com</p></li>
                        
                    </ul>
                </div>

            </div>
            <div class="col-lg-8">
                <form action="{{route('candidatures.store')}}" class="form-box " method="POST" enctype="multipart/form-data" >

                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <input id="name" name="nom" placeholder="Nom *" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <input id="surname" name="prenom" placeholder="Prenom *" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-3">
                            <input id="town" name="ville" placeholder="Ville" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-3">
                            <input id="state" name="pays" placeholder="Pays" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-3">
                            <input id="address" name="adresse" placeholder="Adresse" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-3">
                            <input id="zip" name="code_postal" placeholder="Code postal" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <input id="phone" name="telephone" placeholder="Téléphone *" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-6">
                            <input id="email" name="email" placeholder="Email *" type="email" class="input-text" required>
                        </div>
                    </div>
                    <input id="phone" name="poste" placeholder="Titre du poste" type="text" class="input-text" required>

                    <label for="cv">Curriculum vitae (CV) *</label>
                    <input id="cv" name="cv"  type="file" class="input-text" required>
                    <label for="cv">Lettre de motivation *</label>
                    <input id="lettre" name="lettre"  type="file" class="input-text" required>
                    <textarea id="messagge" name="description" class="input-textarea" placeholder="Dites en une phrase votre motivation ..." required></textarea>
                 
                    <button class="btn btn-xs" type="submit">Postuler</button>
                    
                </form>
            </div>
        </div>
    </div>
</section>
</main>
@endsection