@extends('layouts.app')
@extends('layouts.header2')

@section('content')
@section('mainContent')
<link href="/public/css/nav.css" rel="stylesheet">
<div class="content">
    <p class="text">Une inspiration, une humeur ?</p>
    <h2 class="title2">Partagez...</h2>
    <form action="index.php?action=publishT" method="post" enctype="multipart/form-data">
        <input type="text" class="input" name="titre" placeholder="Titre de la publication">
        <label for="file">
            <i class='bx bx-upload' ></i>Charger une image
        </label>
        <input type="file" name="file" id="file" accept="image/*">
        <input type="text" name="tags" class="input" placeholder="Tags" pattern="^#[a-z0-9_]+(( )+#[a-z0-9_]+)*( )*$">
        <button type="submit" class="submit" name="submit">Publier</button>
    </form>
</div>
@endsection
@endsection