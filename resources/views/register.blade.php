@extends('layouts.app')
@extends('layouts.header')

@section('content')
@section('mainContent')
    <div class="content">
        <form action="index.php?action=registerT" method="POST">
            <input type="email" class="input" placeholder="E-mail" name="email">
            <input type="text" class="input" placeholder="Login" name="login">
            <input type="password" class="input" placeholder="Mot de passe" name="pwd1">
            <input type="password" class="input" placeholder="Confirmation du mot de passe" name="pwd2">
            <button type="submit" class="submit" name="submit">S'enregistrer</button> 
            <a href="index.php?action=login" class="question">Déja inscrit ? <span id="blue">connectez-vous</span></a>
        </form>
    </div>
@endsection
@endsection