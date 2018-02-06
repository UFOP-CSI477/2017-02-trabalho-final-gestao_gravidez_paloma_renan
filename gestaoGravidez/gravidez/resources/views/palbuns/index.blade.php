@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Álbum do bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Foto</th>
          <th>Ações</th>
      </tr>


       @foreach($palbuns as $palbun)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['palbun.destroy', $palbun->id]
            ])
          !!}


          <tr>
              <td><b>{{$palbun->id}}</b></td>
              <td>{{$palbun->data}}</td>
              <td>{{$palbun->foto}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('palbun.edit', $palbun->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('palbun.create')}}">Novo</a>

    </div>

  </div>



@stop