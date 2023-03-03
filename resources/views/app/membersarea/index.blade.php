@extends('layouts.admin')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">Area Soci</h2>
			<br/>
			<p><em>Tutto il materiale è riservato ad uso esclusivo dei soci dell'Associazione Club Astra e ne è vietata la divulgazione senza autorizzazione</em></p>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('app.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Area Riservata Soci</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
			
				<!-- Fonia -->
                <div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <strong>Corso di radiotelefonia aeronautica</strong>
                    </h3>
                </div>

                <div class="card-body">
					<p>
						<a href="{{env('APP_URL');}}/quiz_fonia/1/index.html" target="_blank">Quiz Fonia Parte 1</a><br>
						<a href="{{env('APP_URL');}}/quiz_fonia/2/index.html" target="_blank">Quiz Fonia Parte 2</a><br>
						<a href="{{env('APP_URL');}}/quiz_fonia/3/index.html" target="_blank">Quiz Fonia Parte 3</a><br>
						<a href="{{env('APP_URL');}}/quiz_fonia/4/index.html" target="_blank">Quiz Fonia Parte 4</a><br>
						<a href="{{env('APP_URL');}}/quiz_fonia/5/index.html" target="_blank">Quiz Fonia Parte 5</a><br>
						<a href="{{env('APP_URL');}}/quiz_fonia/ENG/index.html" target="_blank">Quiz Fonia Inglese</a>
					</p>
                </div>
	</div>
	
	<div class="row">
		<div class="col-12">
            <div class="card card-primary card-outline">
				<!-- Wiki -->
				<div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <strong>AstraWiki</strong>
                    </h3>
                </div>

                <div class="card-body">
					<p>
						<a href="{{env('APP_URL');}}/astrawiki" target="_blank">Accedi</a> alla Wiki della teoria del volo!
					</p>
                </div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12">
            <div class="card card-primary card-outline">
				<!-- Documenti -->
				<div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <strong>Documenti</strong>
                    </h3>
                </div>

                <div class="card-body">
					<p>
						<a href="{{env('APP_URL');}}/docs/Statuto Club Astra.pdf" target="_blank">Statuto del Club (vecchio)</a><br>
						<a href="{{env('APP_URL');}}/docs/VERBALE CD DEL 14 GENN 23.pdf" target="_blank">Verbale CD del 14/01/2023</a><br>
						<a href="{{env('APP_URL');}}/docs/VERBALE 18 FEBBRAIO 23.pdf" target="_blank">Verbale CD del 18/02/2023</a><br>
						<a href="{{env('APP_URL');}}/docs/Statuto 2023 Aviosuperfice Club Astra ASD.pdf" target="_blank">Statuto del Club 2023</a><br>
					</p>
                </div>
            </div>
        </div>
    </div>
@endsection