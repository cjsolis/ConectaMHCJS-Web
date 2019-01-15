@if(count($errors)>0)
  <div class="alert alert-danger" style="color:red;background-color:white;left:30px ;top: -60px;position: relative;">
    Debe llenar los campos requeridos.
  </div>
 <!--@foreach($errors->all() as $error)
   <div class="alert alert-danger" style="color:black;background-color:white;">
     {{$error}}
   </div>
 @endforeach-->
@endif

@if(session('success'))
  <div class="alert alert-success"style="color:#2E25A4;background-color:white;left:30px ;top: -60px;position: relative;">
    Formulario Enviado!
  </div>
@endif
