@extends ('layouts.html')

@section('body')

<h1><p align="center">Vacinas da Gravidez</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Nome</th>
        <th>Obervação</th>
        <th>Dica</th>
      </tr>

      @foreach($gvacina as $gva)

      <tr>
        <td>{{ $gva->id }}</td>
        <td>{{ $gva->data }}</td>
        <td>{{ $gva->hora }}</td>
        <td>{{ $gva->nome }}</td>
        <td>{{ $gva->obs }}</td>
        <td>{{ $gva->sugerido }}</td>
      </tr>

      @endforeach

    </table>
    
        <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a>


    @endsection
