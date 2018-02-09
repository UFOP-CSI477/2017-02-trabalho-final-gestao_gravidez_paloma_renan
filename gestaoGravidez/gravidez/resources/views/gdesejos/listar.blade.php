@extends ('layouts.html')

@section('body')

<h1><p align="center">Desejos da Gravidez</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Descrição</th>
      </tr>

      @foreach($gdesejo as $gde)

      <tr>
        <td>{{ $gde->id }}</td>
        <td>{{ $gde->data }}</td>
        <td>{{ $gde->descricao }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
