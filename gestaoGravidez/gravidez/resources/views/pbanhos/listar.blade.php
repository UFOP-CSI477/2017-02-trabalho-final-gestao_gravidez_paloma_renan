@extends ('layouts.html')

@section('body')

<h1><p align="center">Banhos do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Dica</th>
      </tr>

      @foreach($pbanho as $pba)

      <tr>
        <td>{{ $pba->id }}</td>
        <td>{{ $pba->data }}</td>
        <td>{{ $pba->hora }}</td>
        <td>{{ $pba->sugerido }}</td>
      </tr>

      @endforeach

    </table>

        <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a>


    @endsection
