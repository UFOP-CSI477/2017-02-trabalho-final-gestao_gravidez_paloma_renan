@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Itens para o bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Quantidade</th>
          <th>Data</th>
          <th>Local</th>
          <th>Preço</th>
          <th>Ações</th>
      </tr>


       @foreach($pitens as $piten)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['piten.destroy', $piten->id]
            ])
          !!}


          <tr>
              <td><b>{{$piten->id}}</b></td>
              <td>{{$piten->nome}}</td>
              <td>{{$piten->quantidade}}</td>
              <td>{{$piten->data}}</td>
              <td>{{$piten->local}}</td>
              <td>{{$piten->valor}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('piten.edit', $piten->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('piten.create')}}">Novo</a>

    </div>

  </div>



@stop