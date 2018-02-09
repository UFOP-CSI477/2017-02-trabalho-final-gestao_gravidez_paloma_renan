@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Diário de Gravidez</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Peso</th>
          <th>Altura</th>
          <th>Posição</th>
          <th>Descrição</th>
          <th>Ações</th>
      </tr>


       @foreach($gdiarios as $gdiario)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['gdiario.destroy', $gdiario->id]
            ])
          !!}


          <tr>
              <td><b>{{$gdiario->id}}</b></td>
              <td>{{$gdiario->data}}</td>
              <td>{{$gdiario->peso}}</td>
              <td>{{$gdiario->altura}}</td>
              <td>{{$gdiario->posicao}}</td>
              <td>{{$gdiario->descricao}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('gdiario.edit', $gdiario->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('galbun.create')}}">Novo</a>
      <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menugravidez">Voltar</a>

    </div>

  </div>



@stop