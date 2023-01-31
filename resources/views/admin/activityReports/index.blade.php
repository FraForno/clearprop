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
                        <strong>Reportistica sui soci</strong>
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
                                
								<label class="control-label" for="toSelectedDate">Scadenza visita entro:</label>
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
