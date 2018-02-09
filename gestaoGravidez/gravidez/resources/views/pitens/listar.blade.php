@extends ('layouts.html')

@section('body')

<h1><p align="center">Itens do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Data</th>
        <th>Local</th>
        <th>Valor</th>
      </tr>

      @foreach($piten as $pit)

      <tr>
        <td>{{ $pit->id }}</td>
        <td>{{ $pit->nome }}</td>
        <td>{{ $pit->quantidade }}</td>
        <td>{{ $pit->data }}</td>
        <td>{{ $pit->local }}</td>
        <td>{{ $pit->valor }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
