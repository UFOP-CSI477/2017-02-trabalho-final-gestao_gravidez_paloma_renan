@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Sono do bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Hora</th>
          <th>Ações</th>
      </tr>


       @foreach($psonos as $psono)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['psono.destroy', $psono->id]
            ])
          !!}


          <tr>
              <td><b>{{$psono->id}}</b></td>
              <td>{{$psono->data}}</td>
              <td>{{$psono->hora}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('psono.edit', $psono->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('psono.create')}}">Novo</a>
      <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menuposparto">Voltar</a>


    </div>

  </div>



@stop