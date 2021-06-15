@extends('layouts.template')

@section('content')
<section class="section">
<div class="columns is-marginless is-centered is-desktop">
    @foreach($categorias as $c)
        <div class="column is-2">
            <button class="button is-rounded" style="background-color:{{$c->color}}; color:white;">{{$c->name}}</button>
        </div>
    @endforeach
</div>
</section>

@endsection
