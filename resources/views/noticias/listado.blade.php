@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-title-box">
				<div class="float-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Noticias</li>
						<li class="breadcrumb-item active">Listado</li>
					</ol>
				</div>
				<h4 class="page-title">Noticias</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body card-body-registro">
					<div class="table-responsive">
						<table class="table table-striped table-hover mb-0">
							<thead>
								<tr>
                  <th>Título</th>
                  <th>Fecha</th>
									<th width="10%">Acciones</th>
								</tr>
							</thead>
							<tbody>
                @if ($noticias)
                  @foreach ($noticias as $noticia)
                    <tr>
                      <td>{{ $noticia->titulo }}</td>
                      <td>{{ $noticia->fecha }}</td>
                      <td>
                        <a href="/noticias/editar/{{ $noticia->id }}" class="badge bg-success">
                          EDITAR
                        </a>
                        <a href="/noticias/eliminar/{{ $noticia->id }}" class="badge bg-danger">
                          ELIMINAR
                        </a>
                      </td>
                    </tr>
                  @endforeach
                @endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection