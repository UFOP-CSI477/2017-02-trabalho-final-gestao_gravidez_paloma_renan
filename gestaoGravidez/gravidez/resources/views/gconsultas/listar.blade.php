@extends ('layouts.html')

@section('body')

<h1><p align="center">Consultas da Gravidez</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Médico</th>
        <th>Observação</th>
        <th>Dica</th>
      </tr>

      @foreach($gconsulta as $gco)

      <tr>
        <td>{{ $gco->id }}</td>
        <td>{{ $gco->data }}</td>
        <td>{{ $gco->hora }}</td>
        <td>{{ $gco->medico }}</td>
        <td>{{ $gco->obs }}</td>
        <td>{{ $gco->sugerido }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
