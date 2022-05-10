@extends('layouts.app')
@extends('layouts.header2')

@section('content')
@section('mainContent')
<link href="/public/css/nav.css" rel="stylesheet">
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