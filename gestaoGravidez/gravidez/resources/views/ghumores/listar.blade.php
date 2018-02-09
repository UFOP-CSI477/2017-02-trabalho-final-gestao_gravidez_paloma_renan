@extends ('layouts.html')

@section('body')

<h1><p align="center">Humores da Gravidez</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Nível</th>
        <th>Descrição (1-Feliz, 2-Triste, 3-Emotiva)</th>
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

        <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a>


    @endsection
