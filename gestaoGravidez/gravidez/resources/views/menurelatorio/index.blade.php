@extends('layouts.html')

@section('body')
  
  <div class="container">

    <div class="container">
    </div>

    <h1 style="text-align: center;">RELATÓRIOS</h1>

  <nav id="menu1" style="text-align: center; font-family: GalanoGrotesque">
  <ul>


     <li><p align="center"><a href="{{ url('listar/galbuns') }}">GRAVIDEZ - ÁLBUM</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gconsulta') }}">GRAVIDEZ - CONSULTAS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gdesejo') }}">GRAVIDEZ - DESEJOS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gdiario') }}">GRAVIDEZ - DIÁRIO</a></li></p>
     <li><p align="center"><a href="{{ url('listar/ghumore') }}">GRAVIDEZ - HUMORES</a></li></p>
     <li><p align="center"><a href="{{ url('listar/gvacina') }}">GRAVIDEZ - VACINAS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/palbun') }}">PÓS PARTO - ÁLBUM</a></li></p>
     <li><p align="center"><a href="{{ url('listar/palimentacoe') }}">PÓS PARTO - ALIMENTAÇÕES</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pbanho') }}">PÓS PARTO - BANHOS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pconsulta') }}">PÓS PARTO - CONSULTAS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/pficha') }}">PÓS PARTO - FICHA COMPLETA DO BEBÊ</a></li></p>
     <li><p align="center"><a href="{{ url('listar/piten') }}">PÓS PARTO - COMPRA DE ITENS</a></li></p>
     <li><p align="center"><a href="{{ url('listar/psono') }}">PÓS PARTO - SONO DO BEBÊ</a></li></p>
     <li><p align="center"><a href="{{ url('listar/vacina') }}">PÓS PARTO - VACINAS</a></li></p>
     <li><p align="center"><a href="http://localhost:8000/menu">VOLTAR</a></li></p>
  </ul>
</nav></p>


    </div>

  </div>



@stop