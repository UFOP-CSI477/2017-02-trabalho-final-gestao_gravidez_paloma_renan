@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Vacinas do bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Hora</th>
          <th>Nome</th>
          <th>Observação</th>
          <th>Ações</th>
      </tr>


       @foreach($pvacinas as $pvacina)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['pvacina.destroy', $pvacina->id]
            ])
          !!}


          <tr>
              <td><b>{{$pvacina->id}}</b></td>
              <td>{{$pvacina->data}}</td>
              <td>{{$pvacina->hora}}</td>
              <td>{{$pvacina->nome}}</td>
              <td>{{$pvacina->obs}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('pvacina.edit', $pvacina->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('pvacina.create')}}">Novo</a>
      <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menuposparto">Voltar</a>


    </div>

  </div>



@stop