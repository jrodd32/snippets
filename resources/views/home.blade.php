@extends('layout')

@section('content')
<h1 class="title is-1">Welcome to the profile of {{ auth()->user()->name }}</h1>

<div class="tabs is-boxed">
  <ul>
    <li class="is-active">
      <a data-target="snippets">
        <span class="icon is-small"><i class="fa fa-bookmark"></i></span>
        <span>Snippets</span>
      </a>
    </li>
    <li>
      <a data-target="favorites">
        <span class="icon is-small"><i class="fa fa-star"></i></span>
        <span>Favorites</span>
      </a>
    </li>
    <li>
      <a data-disabled="true" disabled class="is-danger">
        <span class="icon is-small"><i class="fa fa-file-text-o"></i></span>
        <span>Documents (coming soon)</span>
      </a>
    </li>
  </ul>
</div>

<div class="tab-content is-active" data-name="snippets">
    <div class="container is-fluid">
        <ul>

<?php
    $user->snippets()->each(function ($snippet, $key) {
?>
            <li><a href="/snippets/{{ $snippet->id }}">{{ $snippet->title }}</a></li>
<?php
    });
?>
        </ul>
    </div>
</div>

<div class="tab-content" data-name="favorites">
    <div class="container is-fluid">
        <ul>

<?php
    $user->favorites()->each(function ($favorites, $key) {
        $favorites->snippets()->each(function ($snippet, $key) {
?>
            <li><a href="/snippets/{{ $snippet->id }}">{{ $snippet->title }}</a></li>
<?php
        });
    });
?>
        </ul>
    </div>
</div>
@endsection
