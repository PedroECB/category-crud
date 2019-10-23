@extends('layout.main')

@section('title','Cadastro de categoria')

@section('content')

	<h2 class="text-center text-danger font-weight-bold mt-3">Cadastro de categoria</h2>

	<div class="container-fluid">
		<div class="row">
			<div class="offset-4"></div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title font-weight-bold text-muted text-center">Nova categoria</h5>
					</div>
					<div class="card-body">
						@if(isset($success))
								@component('components.success')
									{{$success}}
								@endcomponent
						@endif
						<form action="{{ route('update', $categoria->id) }}" method="POST" accept-charset="utf-8">
							@method('put')
							@csrf
							<label for="cCategoria" class="font-weight-bold mb-0 text-info">Categoria: </label>
							<input type="text" id="cCategoria" name="categoria" maxlength="25" class="form-control form-control-sm mb-2" value="{{$categoria->categoria}}" required="">

							<label for="cDescricao" class="font-weight-bold mb-0 text-info">Descrição: </label>
							<input type="text" id="cDescricao" name="descricao" maxlength="25" class="form-control form-control-sm mb-2" value="{{$categoria->descricao}}" required="">

							<div class="d-flex justify-content-between mt-3">
								<button type="submit" class="btn btn-sm">Salvar</button>
								<a href="{{ route('home') }}" title="Voltar" class="btn btn-sm">Voltar</a>	
							</div>	
						</form>
					</div>		
				</div>
			</div>
			<div class="offset-4"></div>
		</div>
	</div>


@endsection