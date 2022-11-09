@section('title','Contact')

@extends('master')

@section('content')
<main>
    <section class="section-base">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title">
                        <h2>Contactez-nous ici</h2>
                        <p>Écrivez-nous</p>
                    </div>
                    <form action="{{route('contact.store')}}" class="form-box " method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Nom</p>
                                <input id="name" name="nom" placeholder="" type="text" class="input-text" required>
                            </div>
                            <div class="col-lg-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email" class="input-text" required>
                            </div>
                        </div>
                        <p>Message</p>
                        <textarea id="messagge" name="message" class="input-textarea" placeholder="" required></textarea>
                        <button class="btn btn-xs" type="submit">Envoyer le message</button>
                        
                    </form>
                </div>
                <div class="col-lg-6">
                    <hr class="space visible-md" />
                    <div class="title">
                        <h2>Quand sommes-nous ouverts?</h2>
                        <p>Information</p>
                    </div>
                    <p>
                        Nous récevons et prenons le soin de lire vos messages; nous vous repondrons dès que possible!
                        Saitech-Group à votre service!
                    </p>
                    <table class="table table-border table-time">
                        <thead>
                            <tr>
                                <th>Jour</th>
                                <th>Matin</th>
                                <th>Après-midi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Lundi - Vendredi</td><td> 8H - 12H</td><td>13H - 17H</td></tr>
                            <tr><td>Samedi</td><td> <p style="color: red">Fermé</p>   </td><td> <p style="color: red">Fermé</p> </td></tr>
                            <tr><td>Dimanche</td><td> <p style="color: red">Fermé</p> </td><td> <p style="color: red">Fermé</p> </td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection