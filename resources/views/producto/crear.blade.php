@extends('layouts.app');
@section('content');
<div class="container">

    <h1>CREAR PRODUCTO</h1>
    <form action="{{route("producto.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('producto.formulario')
        
    </form>
    </div>
@endsection
