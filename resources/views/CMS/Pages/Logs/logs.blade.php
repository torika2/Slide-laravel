@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('logs')}} </title>

    <style>
        .tb-container{
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .tbHead,.tbBody{
            display: flex;
            width: 100%;
        }
        .tbheadInner,.tbBodyInner{
            width: 50%;
            display: flex;
            border: 1px solid #000;
            padding: 10px;
        }
        .tbheadInner{
            font-size: 20px;
        }
        .tbBodyInner{
            flex-direction: column;
        }
        .tbBodyTtl{
            font-size: 10px;
            margin-bottom: 5px;
        }
        .tbBodyDescr{
            font-size: 16px;
        }
    </style>
@stop




@section('content')
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
                                    {{tr('logs')}} <span class="fw-300"><i></i></span>
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="ჩაკეცვა"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="მთელ ეკრანზე"></button>
                                </div>
                            </div>


                            <div class="panel-container show">
                                <div class="panel-content">
                                    <table class="table table-bordered table-hover table-striped w-100" id="logs_table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{tr('action')}}</th>
                                            <th>{{tr('model')}}</th>
                                            <th>{{tr('user')}}</th>
                                            <th>{{tr('date time')}}</th>
                                            <th>{{tr('action')}}</th>
                                        </tr>
                                        </thead>
                                    </table>





                            <div class="modal fade" id="compare-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{tr('log')}}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="tb-container">
                                                <div class="tbHead" >
                                                    <div class="tbheadInner">Old</div>
                                                    <div class="tbheadInner">New</div>
                                                </div>


                                                <div id="changes">



                                                </div>




                                                </div>
                                            </div>







                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>

                                </div>
                            </div>





                        </div>
                    </div>


            </main>

@endsection


@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $('#logs_table').DataTable({
                processing: true,
                responsive: true,
                serverSide: true,
                searching: true,
                paging: true,
                ordering: true,
                bInfo: true,
                ajax: {
                    url: "{{route('log.list')}}",
                    type: 'GET',
                },

                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'description', name: 'description'},
                    {data: 'model', name: 'model'},
                    {data: 'fullname', name: 'fullname'},
                    {data: 'date', name: 'date'},
                    {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'desc']]
            });

            $('body').on('click', '.view-data', function () {
                $("#compare-modal").modal('show')


                $.post("{{route('log.view')}}", {
                    id: $(this).data('id'),
                    _token: '{{csrf_token()}}'
                }).done(function (data) {



                    for (let [key, value] of Object.entries(data.properties.attributes)) {


                        if (data.description === 'deleted'){
                            $('#changes').append(`
                            <div class="tbBody">
                                <div class="tbBodyInner">
                                    <div class="tbBodyTtl">${key}</div>
                                    <div class="tbBodyDescr">${value}</div>
                                </div>

                                <div class="tbBodyInner">
                                    <div class="tbBodyTtl"></div>
                                    <div class="tbBodyDescr"></div>
                                </div>
                            </div>
                                    `)
                        }

                        if (data.description === 'created'){
                            $('#changes').append(`
                            <div class="tbBody">
                                <div class="tbBodyInner">
                                    <div class="tbBodyTtl"></div>
                                    <div class="tbBodyDescr"></div>
                                </div>

                                <div class="tbBodyInner">
                                    <div class="tbBodyTtl">${key}</div>
                                    <div class="tbBodyDescr">${value}</div>
                                </div>
                            </div>
                                    `)
                        }


                        if (data.description === 'updated'){
                            var old = data.properties.old[key];
                            var changed = '';

                            if (old != value){
                                changed = "style='background: #e1ceb5;'"
                            }
                            $('#changes').append(`
                            <div class="tbBody">
                                <div class="tbBodyInner">
                                    <div class="tbBodyTtl">${key}</div>
                                    <div class="tbBodyDescr">${old}</div>
                                </div>

                                <div class="tbBodyInner" ${changed}>
                                    <div class="tbBodyTtl">${key}</div>
                                    <div class="tbBodyDescr">${value}</div>
                                </div>
                            </div>
                                    `)
                        }




                    }


                })


            })


            $("#compare-modal").on('hide.bs.modal', function () {
                $('#changes').html('')
            })


        })



    </script>
@stop
