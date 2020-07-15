@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('product included')}} </title>
    <style>
        .error {
            color: #ff095f;
        }
    </style>
@stop




@section('content')

    @php $locales = getLocales(); @endphp
    <main id="js-page-content" role="main" class="page-content">
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    @if(Session::has('success'))

                        <div class="alert bg-success-400 text-white" role="alert">
                            {!! Session::get("success") !!}
                        </div>
                    @elseif(Session::has('error'))
                        <div class="alert bg-danger-400 text-white" role="alert">
                            {!! Session::get("error") !!}
                        </div>
                    @endif <br>

                    <div class="panel-hdr">
                        <h2>
                            {{tr('product included')}} <span class="fw-300"><i>{{tr('list')}}</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                        </div>
                    </div>


                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="col-sm-12 d-flex align-items-center justify-content-end">
                                @if($data->count() < 3)
                                <a href="{{route('CMS.product.included.create')}}" class="btn btn-primary waves-effect waves-themed ">
                                    {{tr('add new')}}</a>
                                    @endif
                            </div>
                            <br/>
                            <table class="table table-bordered table-hover table-striped w-100" id="data_table">
                                <thead>
                                <tr>
                                    <th>ord</th>
                                    <th>{{tr('title')}}</th>
                                    <th>{{tr('action')}}</th>
                                </tr>
                                </thead>
                            </table>

                        </div>
                    </div>





                </div>
            </div>
        </div>

    </main>
@endsection


@section('scripts')


    <script>
        $(document).ready(function () {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table =  $('#data_table').DataTable({
                processing: true,
                responsive: true,
                serverSide: true,
                searching: true,
                paging: true,
                ordering: true,
                bInfo: true,
                rowReorder: {
                    selector: 'tr td:not(:first-child)'
                },
                createdRow: function (row, data) {
                    $(row).attr('data-id', data.id);

                },

                ajax: {
                    url: "{{route('CMS.product.included.list')}}",
                    type: 'GET',
                },
                columns: [
                    {data: 'ord', name: 'ord'},
                    {data: 'name.{{App::getLocale()}}', name: 'title'},
                    {data: 'action', name: 'action', orderable: false},
                ],

            });


            table.on('row-reorder', function (e, details) {
                if(details.length) {
                    let rows = [];
                    details.forEach(element => {
                        rows.push({
                            id: table.row(element.node).data().id,
                            position: element.newPosition
                        });

                    });


                    $.ajax({
                        headers: {'x-csrf-token': '{{csrf_token()}}'},
                        method: 'POST',
                            url: "{{route('CMS.product.included.reOrder')}}",
                        data: { rows }
                    }).done(function () { table.ajax.reload() });

                }
            });





            $('body').on('click', '.delete', function (e) {
                e.preventDefault();

                var id = $(this).data("id");

                Swal.fire(
                    {
                        title: "{{tr('are you sure, you want to delete data?')}}",
                        type: "question",
                        showCancelButton: true,
                        cancelButtonText: '{{tr('cancel')}}',
                        confirmButtonText: "{{tr('yes, delete!')}}"
                    }).then(function (result) {
                    if (result.value) {
                        $.post('{{route('CMS.product.included.delete')}}', {
                            id: id,
                            _token: '{{csrf_token()}}'
                        }).done(function (data) {
                            if (data.success === true) {
                                Swal.fire('{{tr('data removed successfully!')}}', '', "success");
                                $('#data_table').DataTable().ajax.reload();
                            }
                        });

                    }
                });

            });



        });
    </script>

@stop
