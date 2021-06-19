<a href="{{route("producto.index")}}" class="btn btn-dark">Regresar menú principal</a>
@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach   
</div>
@endif
<div class="form-group">
<label for="nombreP">NOMBRE PRODUCTO</label>
<input class="form-control" type="text" name="nombreP" id="nombreP" value="{{isset($producto->nombreP)?$producto->nombreP:''}}">
</div>
<br>
<div class="form-group">
<label for="precioP">PRECIO</label>
<input class="form-control" type="text" name="precioP" id="precioP" value="{{isset($producto->precioP)?$producto->precioP:''}}">
</div>
<br>
<div class="form-group">
<label for="cantidadP">CANTIDAD</label>
<input class="form-control" type="text" name="cantidadP" id="cantidadP" value="{{isset($producto->cantidadP)?$producto->cantidadP:''}}">
</div>
<br>
<div class="form-group">
<label for="fotoP">FOTO</label>

@if (isset($producto->fotoP))
    <img src="{{asset('storage'.'/'.$producto->fotoP)}}" alt="" width="100px" height="100px">        
@endif

<input type="file" name="fotoP" id="fotoP" class="form-control">
</div>

<br>
<input type="submit" value="REGISTRAR" class="btn btn-dark">