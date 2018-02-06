@extends ('layouts.html')

@section('body')

<h1><p align="center">Álbum de Gravidez</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Data</th>
        <th>Foto</th>
      </tr>

      @foreach($galbun as $gal)

      <tr>
        <td>{{ $gal->id }}</td>
        <td>{{ $gal->data }}</td>
        <td>{{ $gal->foto }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
