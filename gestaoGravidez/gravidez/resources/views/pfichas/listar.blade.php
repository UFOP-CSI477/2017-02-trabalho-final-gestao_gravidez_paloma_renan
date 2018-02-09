@extends ('layouts.html')

@section('body')

<h1><p align="center">Ficha do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Nome</th>
        <th>Foto</th>
        <th>Nascimento</th>
        <th>Cidade</th>
        <th>Hospital</th>
        <th>Genitor 1</th>
        <th>Genitor 2</th>
        <th>Médico</th>
      </tr>

      @foreach($pficha as $pfi)

      <tr>
        <td>{{ $pfi->id }}</td>
        <td>{{ $pfi->nome }}</td>
        <td>{{ $pfi->foto }}</td>
        <td>{{ $pfi->nascimento }}</td>
        <td>{{ $pfi->cidade }}</td>
        <td>{{ $pfi->hospital }}</td>
        <td>{{ $pfi->genitor1 }}</td>
        <td>{{ $pfi->genitor2 }}</td>
        <td>{{ $pfi->medico }}</td>
      </tr>

      @endforeach

    </table>

        <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a>


    @endsection
