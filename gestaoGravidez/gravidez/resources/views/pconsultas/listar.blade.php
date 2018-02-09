@extends ('layouts.html')

@section('body')

<h1><p align="center">Consultas do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Pediatra</th>
        <th>Observação</th>
      </tr>

      @foreach($pconsulta as $pco)

      <tr>
        <td>{{ $pco->id }}</td>
        <td>{{ $pco->data }}</td>
        <td>{{ $pco->hora }}</td>
        <td>{{ $pco->pediatra }}</td>
        <td>{{ $pco->obs }}</td>
      </tr>

      @endforeach

    </table>

        <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a>


    @endsection
