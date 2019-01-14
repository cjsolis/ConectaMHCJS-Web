@if(count($errors)>0)
  <div class="alert alert-danger" style="color:black;background-color:white;">
    Debe llenar los campos requeridos.
  </div>
@endif

@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}

  </div>
@endif
