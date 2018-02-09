@extends ('layouts.html')

@section('body')

<h1><p align="center">Vacinas do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Nome</th>
        <th>Observação</th>
      </tr>

      @foreach($pvacina as $pva)

      <tr>
        <td>{{ $pva->id }}</td>
        <td>{{ $pva->data }}</td>
        <td>{{ $pva->hora }}</td>
        <td>{{ $pva->nome }}</td>
        <td>{{ $pva->obs }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
