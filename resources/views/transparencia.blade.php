@extends('layouts.app')
@section ('content')

<script>
    $("#search").on("keyup", function() {
        var value = $(this).val();

        $("table tr").each(function(index) {
            if (index !== 0) {

                $row = $(this);

                var id = $row.find("td:first").text();

                if (id.indexOf(value) !== 0) {
                    $row.hide();
                }
                else {
                    $row.show();
                }
            }
        });
    });
</script>
<?php

$doc_transp = App\Documentos::all()->where('tipo_documento', '=', 'Acta');

?>
<h1 id="titulojunta">Transparencia</h1>
<p ALIGN="justify">El Museo Histórico Cultural Juan Santamaría está regido por una Junta Administrativa, integrada por cinco miembros. Cuenta con personería jurídica, para atender todo lo relativo al cuidado de la institución y al enriquecimiento de su patrimonio, de acuerdo con lo establecido en la ley y en su reglamento. Los miembros de esta Junta Administrativa desempeñan sus cargos AD HONOREM.<br />
<br />

La preside el representante del Ministerio de Cultura y Juventud; los cuatro restantes son escogidos de ternas integradas por: el Gobierno local (Municipalidad de Alajuela), el Instituto de Alajuela, la Universidad Técnica Nacional y la Academia de Geografía e Historia de Costa Rica.</p>
<strong>Listado de Actas de Transparencia</strong>
<br>

<div style="overflow-y:scroll;width: auto; height:300px;" >
    
    <table class="table table-striped table-hover">
        <tr>
            <th><strong>Nombre</strong></th>
            <th><strong>Fecha (yyyy-mm-dd)</strong></th>
            <th><strong>Documento</strong></th>
            @foreach($doc_transp as $doc)
                    <tr>
                        <th>{{ $doc->nombre_documento }}</th>
                        <th>{{ $doc->fecha_documento }}</th>
                        <th><a href="{{ $doc->url_documento }}" target="_blank">Descargar</a></th>
                    </tr>  
            @endforeach
        </tr>
    
    </table>
</div>
<br>
<br>


@endsection
