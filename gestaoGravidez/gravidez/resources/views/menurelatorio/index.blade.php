@extends('layouts.html')

@section('body')
  
  <div class="container">

    <div class="container">
    </div>

    <h1 style="text-align: center;">RELATÓRIOS</h1>

  <nav id="menu1" style="text-align: center; font-family: GalanoGrotesque">
  <ul>


     <li><p align="center"><a href="{{ url('listar/galbuns') }}">GRAVIDEZ - ÁLBUM</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gconsultas') }}">GRAVIDEZ - CONSULTAS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gdesejos') }}">GRAVIDEZ - DESEJOS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gdiarios') }}">GRAVIDEZ - DIÁRIO</a></li></p>
     <li><p align="center"><a href="{{ url('listar/ghumores') }}">GRAVIDEZ - HUMORES</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gvacinas') }}">GRAVIDEZ - VACINAS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/palbuns') }}">PÓS PARTO - ÁLBUM</a></li></p>
     <li><p align="center"><a href="{{ url('listar/palimentacoes') }}">PÓS PARTO - ALIMENTAÇÕES</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pbanhos') }}">PÓS PARTO - BANHOS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pconsultas') }}">PÓS PARTO - CONSULTAS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pfichas') }}">PÓS PARTO - FICHA COMPLETA DO BEBÊ</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pitens') }}">PÓS PARTO - COMPRA DE ITENS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/psonos') }}">PÓS PARTO - SONO DO BEBÊ</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pvacinas') }}">PÓS PARTO - VACINAS</a></li></p>
     <li><p align="center"><a href="http://localhost:8000/menu">VOLTAR</a></li></p>
  </ul>
</nav></p>


    </div>

  </div>



@stop