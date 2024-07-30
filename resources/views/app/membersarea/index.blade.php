@extends('layouts.admin')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">Area Soci ed Allievi</h2>
			<br/>
			<p><em>Tutto il materiale è riservato ad uso esclusivo dei soci dell'Associazione Club Astra e ne è vietata la divulgazione senza autorizzazione</em></p>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('app.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Area Riservata Soci ed Allievi</li>
            </ol>
        </div>
    </div>
@endsection

<div>
@section('content')
	@canany(['members_access', 'student_access'])
	<!-- Fonia -->
    
	@endcanany
	
	@can('members_access')
	<div class="row">
		<div class="col-12">
            <div class="card card-primary card-outline">
				<div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <strong>Documenti</strong>
                    </h3>
                </div>

                <div class="card-body">
					<p>
						<a href="{{env('APP_URL');}}/docs/Statuto 2024 finale.pdf" target="_blank">Statuto del Club</a><br />
						<br />
						<a href="{{env('APP_URL');}}/docs/VERBALE 04 12 22.pdf" target="_blank">Verbale Assemblea Soci del 04/12/2022</a><br />
						<a href="{{env('APP_URL');}}/docs/verbale CD 14 01 23.pdf" target="_blank">Verbale CD del 14/01/2023</a><br />
						<a href="{{env('APP_URL');}}/docs/verbale del 18 02 2023.pdf" target="_blank">Verbale Assemblea Soci del 18/02/2023</a><br />
						<a href="{{env('APP_URL');}}/docs/verbale 13.05.23.pdf" target="_blank">Verbale CD del 13/05/2023</a><br />
						<a href="{{env('APP_URL');}}/docs/verbale 16 12 2023.pdf" target="_blank">Verbale Assemblea Soci del 16/12/2023</a><br />
						<a href="{{env('APP_URL');}}/docs/VERBALE ASSEMBLEA DEI SOCI DEL 20 APR 2024.pdf" target="_blank">Verbale Assemblea Soci del 20/04/2024</a><br />
						<a href="{{env('APP_URL');}}/docs/LibroSoci20Apr2024.pdf" target="_blank">Libro Soci approvato il 20/04/2024</a><br />
					</p>
                </div>
            </div>
        </div>
    </div>
	@endcan
@endsection
</div>
<script>
openmodal = function(src) {
	document.getElementById("myModal").style.display = "block";
	document.getElementById("video-player").src=src;
	document.getElementById("video-player").play();
}

closemodal = function() {
	document.getElementById("video-player").pause();
	document.getElementById("video-player").currentTime=0;
	document.getElementById("myModal").style.display = "none";
}
</script>