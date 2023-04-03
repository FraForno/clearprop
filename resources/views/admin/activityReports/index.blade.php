@extends('layouts.admin')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">{{ trans('cruds.activityReport.title') }}</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('app.home')}}">Home</a></li>
                <li class="breadcrumb-item active">{{ trans('cruds.activityReport.title') }}</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
				<div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <strong>Visite mediche</strong>
                    </h3>
                </div>

                <div class="card-body">
					<form method="POST" action="{{ route("admin.users.report") }}" enctype="multipart/form-data">
					@csrf
                        <div class="row">
                            <div class="col-6 text-left">
                                Genera report visite mediche in scadenza
								<br />
								<br />
								
								<label class="control-label" for="fromSelectedDate">Scadenza visita dal:</label>
								<input type="date" id="fromSelectedDate" name="fromSelectedDate" value="{{date('Y-m-d')}}" required />
								
								<br />
								<br />
                                
								<label class="control-label" for="toSelectedDate">Scadenza visita al:</label>
								<input type="date" id="toSelectedDate" name="toSelectedDate" value="{{date('Y-m-d')}}" required />
                            </div>                            
                        </div>
						<div class="row">
							<div class="col-6 text-left">
								<br />
                                <button class="btn btn-warning"
                                        type="submit">Genera</button>
                            </div>
						</div>
                    </form>
                </div>
            </div>
			
			<div class="card card-primary card-outline">
				<div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <strong>Abilitazione VDS Avanzato</strong>
                    </h3>
                </div>

                <div class="card-body">
					<form method="POST" action="{{ route("admin.users.report3") }}" enctype="multipart/form-data">
					@csrf
                        <div class="row">
                            <div class="col-6 text-left">
                                Genera report abilitazioni avanzato in scandenza
								<br />
								<br />
								
								<label class="control-label" for="fromSelectedDate">Scadenza avanzato dal:</label>
								<input type="date" id="fromSelectedDate" name="fromSelectedDate" value="{{date('Y-m-d')}}" required />
								
								<br />
								<br />
                                
								<label class="control-label" for="toSelectedDate">Scadenza avanzato al:</label>
								<input type="date" id="toSelectedDate" name="toSelectedDate" value="{{date('Y-m-d')}}" required />
                            </div>                            
                        </div>
						<div class="row">
							<div class="col-6 text-left">
								<br />
                                <button class="btn btn-warning"
                                        type="submit">Genera</button>
                            </div>
						</div>
                    </form>
                </div>
            </div>
			
			<div class="card card-primary card-outline">
				<div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <strong>Quote associative</strong>
                    </h3>
                </div>

                <div class="card-body">
					<form method="POST" action="{{ route("admin.users.report2") }}" enctype="multipart/form-data">
					@csrf
                        <div class="row">
                            <div class="col-6 text-left">
                                Genera report quote associative in scadenza
								<br />
								<br />
								
								<label class="control-label" for="fromSelectedDate">Scadenza quota dal:</label>
								<input type="date" id="fromSelectedDate" name="fromSelectedDate" value="{{date('Y-m-d')}}" required />
								
								<br />
								<br />
                                
								<label class="control-label" for="toSelectedDate">Scadenza quota al:</label>
								<input type="date" id="toSelectedDate" name="toSelectedDate" value="{{date('Y-m-d')}}" required />
                            </div>                            
                        </div>
						<div class="row">
							<div class="col-6 text-left">
								<br />
                                <button class="btn btn-warning"
                                        type="submit">Genera</button>
                            </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

@endsection
