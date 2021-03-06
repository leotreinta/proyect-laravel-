<h1>{{$modo}} empleado</h1>

@if(count($errors)>0)

  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach($errors->all() as $error )
         <li> {{$error}}</li>

      @endforeach
    </ul>
  </div>

@endif


<div class="form-group">

    <label for="Nombre">Nombre</label>
      <input type="text" class="form-control" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
    
</div>

  <div class="form-group">
        <label for="ApellidoPaterno">Apellido Paterno</label>
        <input type="text"  class="form-control" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}" id="ApellidoPaterno">
      
  </div>

  <div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text"  class="form-control" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}" id="ApelldoMaterno"> 

  </div>

  <div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text"  class="form-control" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}"  id="Correo">
   
  </div>

    <div class="form-group">
        <label for="Foto">Foto</label>
          @if(isset($empleado->foto))

            <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto}}" width="100" alt="">
          @endif

        <input type="file"  class="form-control" name="foto" value="" id="foto">
      
    </div>
    
  <input class="btn btn-success" type="submit" value="{{$modo}} datos">

  <a class="btn btn-primary" href="{{url('empleado/') }}">Regresar</a>

  <br>
