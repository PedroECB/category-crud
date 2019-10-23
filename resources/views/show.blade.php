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
						<h5 class="card-title font-weight-bold text-muted text-center">Informações da categoria</h5>
					</div>
					<div class="card-body">
						
							<label for="cCategoria" class="font-weight-bold mb-0 text-info">Categoria: </label>
							<input type="text" id="cCategoria" name="categoria" maxlength="25" class="form-control form-control-sm mb-2" value="{{$categoria->categoria}}" readonly>

							<label for="cDescricao" class="font-weight-bold mb-0 text-info">Descrição: </label>
							<input type="text" id="cDescricao" name="descricao" maxlength="25" class="form-control form-control-sm mb-2" value="{{$categoria->descricao}}" readonly>

							<div class="d-flex justify-content-between mt-3">
								<a class="btn btn-sm btn-link font-weight-bold" href="{{route('edit', $categoria->id)}}">Editar</a>
								<a class="btn btn-sm font-weight-bold" href="{{ route('home') }}" title="Voltar" class="btn btn-sm">Voltar</a>	
							</div>	
					</div>		
				</div>
			</div>
			<div class="offset-4"></div>
		</div>
	</div>


@endsection