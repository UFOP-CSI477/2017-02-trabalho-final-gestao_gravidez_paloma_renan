@extends ('layouts.html')

@section('body')

<h1><p align="center">Alimentações do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Cardápio</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Observação</th>
        <th>Dica</th>
      </tr>

      @foreach($palimentacoe as $pali)

      <tr>
        <td>{{ $pali->id }}</td>
        <td>{{ $pali->cardapio }}</td>
        <td>{{ $pali->data }}</td>
        <td>{{ $pali->hora }}</td>
        <td>{{ $pali->obs }}</td>
        <td>{{ $pali->sugerido }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
