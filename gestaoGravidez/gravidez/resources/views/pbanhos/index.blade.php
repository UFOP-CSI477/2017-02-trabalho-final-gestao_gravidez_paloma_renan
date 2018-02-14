@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Banhos do Bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Horário</th>
          <th>Dica</th>
          <th>Ações</th>
      </tr>


       @foreach($pbanhos as $pbanho)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['pbanho.destroy', $pbanho->id]
            ])
          !!}


          <tr>
              <td><b>{{$pbanho->id}}</b></td>
              <td>{{$pbanho->data}}</td>
              <td>{{$pbanho->hora}}</td>
              <td>{{$pbanho->sugerido}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('pbanho.edit', $pbanho->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('pbanho.create')}}">Novo</a>
      <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menuposparto">Voltar</a>

    </div>

  </div>



@stop