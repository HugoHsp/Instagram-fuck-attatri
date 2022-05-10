@extends('layouts.app')
@extends('layouts.header2')


@section('content')
@section('mainContent')
<link rel="stylesheet" href="/public/css/search.css">
<link rel="stylesheet" href="/public/css/nav.css">
@section('topMenu')
<div class="searchbar">
    <form action="index.php?action=search" method="GET">
        <input type="hidden" name="action" value="search">
        <input type="text" name="v" class="input" id="search_input"placeholder="Votre recherche" <?php if(isset($_GET["v"])){ ?> value="<?= $_GET["v"] ?>"<?php } ?>>
        <input type="hidden" name="search" value="rechercher">
        <button type="submit" style="background-color: unset; border: unset;">
            <i class='bx bx-search'></i>
        </button>
    </form>
</div>
<div class="content">
    @forelse ($articles as $item)
        <article class="article">
            <span>{{$item->login}}</span>
            <img src="{{$item->img_url}}" class="image_post">
            <h3 class="post_title">{{$item->titre}}</h3>
            <div class="flex">
                <p class="desc">{{$item->tags}}</p>
                <i class='bx bx-message-rounded-dots'></i>
                <i class='bx bx-heart' ></i>
            </div>
        </article>
    @empty
        <h1>Aucun article à afficher</h1>
    @endforelse
</div>
@endsection

@endsection
@endsection