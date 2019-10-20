@extends('layout.main')

@section('title','Categorias | Home')

@section('content')


    <h1 class="text-center font-weight-bold text-danger">Laravel 6</h1>



    <div class="container">
                <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0 font-weight-bold">Categorias</h6>
        
        <div class="d-flex">
            <a href="{{ route('create') }}" title="">
              <button type="button" class="mt-3 btn btn-sm font-weight-bold"><i class="fa fa-plus"></i> Nova categoria</button>
            </a>
        </div>

        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark font">Nome da categoria</strong>
              <div>
                <button type="button" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i></button>
                <button type="button" class="btn btn-sm btn-warning font-weight-bold">Editar</button>
                <button type="button" class="btn btn-sm btn-danger font-weight-bold">Excluir</button>
              </div>

            </div>
            <span class="d-block">Descrição</span>
          </div>
        </div>

        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Nome da categoria</strong>
              <div>
                <button type="button" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i></button>
                <button type="button" class="btn btn-sm btn-warning font-weight-bold">Editar</button>
                <button type="button" class="btn btn-sm btn-danger font-weight-bold">Excluir</button>
              </div>

            </div>
            <span class="d-block">Descrição</span>
          </div>
        </div>

        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Nome da categoria</strong>
              <div>
                <button type="button" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i></button>
                <button type="button" class="btn btn-sm btn-warning font-weight-bold">Editar</button>
                <button type="button" class="btn btn-sm btn-danger font-weight-bold">Excluir</button>
              </div>

            </div>
            <span class="d-block">Descrição</span>
          </div>
        </div>

        <small class="d-block text-right mt-3">
          <a href="#">@PedroECB</a>
        </small>
      </div>
    </div>

  @endsection