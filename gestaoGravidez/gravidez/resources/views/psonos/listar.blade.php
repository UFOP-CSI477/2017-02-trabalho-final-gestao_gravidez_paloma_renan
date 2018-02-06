@extends ('layout.principal')

@section ('conteudo')

<h1>Lista de Cidades</h1>

    <table>

      <!--Cabeçalho-->
      <tr>  
        <th>Código</th>
        <th>Nome</th>
      </tr>

      <!-- Dados dos alunos //-->
      @foreach($cidades as $cidade)

      <tr>
        <td>{{ $cidade->id }}</td>
        <td>{{ $cidade->nome }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
