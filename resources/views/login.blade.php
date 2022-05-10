@extends('layouts.app')
@extends('layouts.header')

@section('content')
@section('mainContent')
    <div class="content">
        <form action="index.php?action=loginT" method="POST">
            <input type="email" class="input" placeholder="E-mail" name="email">
            <input type="password" class="input" placeholder="Mot de passe" name="password">
            <span>
                <input type="checkbox" name="remember" id="remember" name="remember">   
                <label for="remember">Se souvenir de moi</label>
            </span>
            <button type="submit" class="submit" name="submit">Connexion</button> 
            <a href="index.php?action=register" class="question">Vous n'avez pas encore de compte ? <span id="blue">inscrivez-vous</span></a>
        </form>
    </div>
@endsection
@endsection