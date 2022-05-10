@extends('layouts.app')
@extends('layouts.header2')

@section('content')
@section('mainContent')
<link rel="stylesheet" href="/public/css/search.css">
<link rel="stylesheet" href="/public/css/nav.css">
@section('topMenu')
<div class="searchbar">
    <form method="GET">
        <input type="hidden" name="action" value="subscription">
        <input type="text" name="v" class="input" id="search_input"placeholder="Votre recherche" <?php if(isset($_GET["v"])){ ?> value="<?= $_GET["v"] ?>"<?php } ?>>
        <input type="hidden" name="search" value="rechercher">
        <button type="submit" style="background-color: unset; border: unset;">
            <i class='bx bx-search'></i>
        </button>
    </form>
</div>
<div class="content">
    <div class="article">
    @if(!empty($searchUsers))
    <h1>Ma recherche</h1>
    @forelse ($searchUsers as $users)
    <div class="user">
        <span class="left">
            <h2>{{$users->login}}</h2>
        </span>
        <span class="right">
            <a href="index.php?action=addFriend&id={{$users->id}}">
                <button type="submit" class="submit">
                    S'abonner
                </button>
            </a>
        </span>
    </div>
    @empty
        <h1>Aucun article à afficher</h1>
    @endforelse
    @endif
    @if(!empty($friendUsers))
    <h1>Mes abonnements</h1>
    @forelse ($friendUsers as $users)
    <div class="user">
        <span class="left">
            <h2>{{$users->login}}</h2>
        </span>
        <span class="right">
            <a href="index.php?action=delFriend&id={{$users->id}}">
                <button class="submit">
                    Se désabonner
                </button>
            </a>
        </span>
    </div>
    {{$users->login}}
    @empty
        <h1>Aucun article à afficher</h1>
    @endforelse
    @endif
    </div>
    
</div>
@endsection

@endsection
@endsection