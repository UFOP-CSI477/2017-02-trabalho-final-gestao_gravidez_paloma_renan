@extends ('layouts.html')

@section('body')

<h1><p align="center">Álbum do Bebê</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Foto</th>
      </tr>

      @foreach($palbun as $pal)

      <tr>
        <td>{{ $pal->id }}</td>
        <td>{{ $pal->data }}</td>
        <td>{{ $pal->foto }}</td>
      </tr>

      @endforeach

    </table>

        <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a>


    @endsection
