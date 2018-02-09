@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Desejos Gravidez</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Descrição</th>
          <th>Ações</th>
      </tr>


       @foreach($gdesejos as $gdesejo)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['gdesejo.destroy', $gdesejo->id]
            ])
          !!}


          <tr>
              <td><b>{{$gdesejo->id}}</b></td>
              <td>{{$gdesejo->data}}</td>
              <td>{{$gdesejo->descricao}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('gdesejo.edit', $gdesejo->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('gdesejo.create')}}">Novo</a>
      <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menugravidez">Voltar</a>

    </div>

  </div>



@stop