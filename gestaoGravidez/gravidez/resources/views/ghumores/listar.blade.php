@extends ('layouts.html')

@section('body')

<h1><p align="center">Humores da Gravidez</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Nível</th>
        <th>Descrição</th>
      </tr>

      @foreach($ghumore as $ghu)

      <tr>
        <td>{{ $ghu->id }}</td>
        <td>{{ $ghu->data }}</td>
        <td>{{ $ghu->nivel }}</td>
        <td>{{ $ghu->descricao }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
