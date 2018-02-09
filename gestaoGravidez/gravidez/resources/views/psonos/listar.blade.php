@extends ('layouts.html')

@section('body')

<h1><p align="center">Sono do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Horário</th>
      </tr>

      @foreach($psono as $pso)

      <tr>
        <td>{{ $pso->id }}</td>
        <td>{{ $pso->data }}</td>
        <td>{{ $pso->hora }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
