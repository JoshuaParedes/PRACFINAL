@extends('layouts.app');
@section('content');
<div class="container">

<body>
    <h1>EDITAR PRODUCTO</h1>
    <form method="POST" action="{{route("producto.update", $producto->id)}}" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}        
        @include('producto.formulario')
    </form>
    </div>
@endsection