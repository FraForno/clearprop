@extends('layouts.admin')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">{{ trans('cruds.user.title') }}</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('app.home')}}">Home</a></li>
                <li class="breadcrumb-item active">{{ trans('cruds.user.title') }}</li>
            </ol>
        </div>
    </div>
    @can('user_create')
        <div class="row">
            <div class="col">
                <a class="btn btn-success float-right" href="{{ route('admin.users.create') }}">
                    <i class="fas fa-edit"></i>
                    {{ trans('global.create') }}
                </a>
            </div>
        </div>
    @endcan
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" href="#active_users" role="tab" aria-controls="active_users"
                               data-toggle="pill"
                               aria-selected="true">
                                Anagrafica
                            </a>
                        </li>
                        <!--li class="nav-item">
                            <a class="nav-link" href="#deleted_users" role="tab" aria-controls="deleted_users"
                               data-toggle="pill" aria-selected="false">
                                Disattivati
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="#contact_users" role="tab" aria-controls="contact_users"
                               data-toggle="pill" aria-selected="false">
                                Contatti
                            </a>
                        </li>-->
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" role="tabpanel" id="active_users"
                             aria-labelledby="active_users">
                            <div class="table-responsive">
                                <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-active_users">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class="fas fa-eye"></i>
                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.id') }}
                                        </th>
										<th data-priority="1">
                                            {{ trans('cruds.user.fields.surname') }}
                                        </th>
                                        <th data-priority="1">
                                            {{ trans('cruds.user.fields.name') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.email') }}
                                        </th>
                                        <th>
                                            Scadenza Visita Medica
                                        </th>
										<th>
                                            Scadenza Quota Associativa
                                        </th>
                                        <th data-priority="2">
                                            &nbsp;
                                        </th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!--<div class="tab-pane" role="tabpanel" id="deleted_users" aria-labelledby="deleted_users">
                            @includeIf('admin.users.relationships.deletedUsers')
                        </div>
						<div class="tab-pane" role="tabpanel" id="contact_users" aria-labelledby="contact_users">
                            @includeIf('admin.users.relationships.contactUsers')
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            let dtDom = 'lBfrtip<"actions">'
            let dtOverrideGlobals = {
                dom: dtDom,
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
				showCheckboxColumn: false,
                aaSorting: [],
                ajax: "{{ route('admin.users.index') }}",
				select: {
					style: 'api',
				},
                responsive: {
                    details: {
                        renderer: function (api, rowIdx, columns) {
                            var data = $.map(columns, function (col, i) {
                                return col.hidden ?
                                    '<tr data-dt-row="' + col.rowIndex + '" data-dt-column="' + col.columnIndex + '">' +
                                    '<td class="font-weight-bold">' + col.title + ':' + '</td> ' +
                                    '<td>' + col.data + '</td>' +
                                    '</tr>' :
                                    '';
                            }).join('');

                            return data ?
                                $('<table/>').append(data) :
                                false;
                        }
                    }
                },
                columns: [
                    {
                        'orderable': true,
                        'searchable': false,
                        "data": null,
                        "defaultContent": '',
                    },
                    {data: 'id', name: 'id'},
					{data: 'surname', name: 'surname'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'medical_due', name: 'medical_due'},
					{data: 'associate_due', name: 'associate_due'},
                    {data: 'actions', name: '{{ trans('global.actions') }}'}
                ],
                order: [[2, 'asc']],
                pageLength: 25
            };
            $('.datatable-active_users').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        });
    </script>
@endsection
