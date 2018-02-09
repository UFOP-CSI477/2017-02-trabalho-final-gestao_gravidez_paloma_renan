@extends ('layouts.html')

@section('body')

<h1><p align="center">Diário da Gravidez</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Posição</th>
        <th>Descrição</th>
      </tr>

      @foreach($gdiario as $gdi)

      <tr>
        <td>{{ $gdi->id }}</td>
        <td>{{ $gdi->data }}</td>
        <td>{{ $gdi->peso }}</td>
        <td>{{ $gdi->altura }}</td>
        <td>{{ $gdi->posicao }}</td>
        <td>{{ $gdi->descricao }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
