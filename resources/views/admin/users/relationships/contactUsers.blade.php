<div class="table-responsive">
    <table class=" table table-bordered table-striped table-hover datatable datatable-contact_users">
        <thead>
        <tr>
            <th>
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
            <th data-priority="2">

            </th>
        </tr>
        </thead>
    </table>
</div>

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
                aaSorting: [],
                ajax: "{{ route('admin.users.getContactUsers') }}",
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
                        "orderable": false,
                        'searchable': false,
                        "data": null,
                        "defaultContent": '',
                    },
                    {data: 'id', name: 'id'},
					{data: 'surname', name: 'surname'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'actions', name: '{{ trans('global.actions') }}'}
                ],
                order: [[2, 'asc']],
                pageLength: 25,
            };
            $('.datatable-contact_users').DataTable(dtOverrideGlobals);
            $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
@endsection
