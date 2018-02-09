@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Alimentações do bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Cardápio</th>
          <th>Data</th>
          <th>Hora</th>
          <th>Observação</th>
          <th>Dica</th>
          <th>Ações</th>
      </tr>


       @foreach($palimentacoes as $palimentacoe)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['palimentacoe.destroy', $palimentacoe->id]
            ])
          !!}


          <tr>
              <td><b>{{$palimentacoe->id}}</b></td>
              <td>{{$palimentacoe->cardapio}}</td>
              <td>{{$palimentacoe->data}}</td>
              <td>{{$palimentacoe->hora}}</td>
              <td>{{$palimentacoe->obs}}</td>
              <td>{{$palimentacoe->sugerido}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('palimentacoe.edit', $palimentacoe->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('palimentacoe.create')}}">Novo</a>
      <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menuposparto">Voltar</a>

    </div>

  </div>



@stop