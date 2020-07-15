@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('subscriptions')}} </title>
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
                            {{tr('subscriptions')}} <span class="fw-300"><i>{{tr('list')}}</i></span>
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


                                <a href="{{route('CMS.subscriptions.export')}}"
                                   class="btn btn-outline-success btn-pills waves-effect waves-themed"
                                   style=" margin-bottom: 10px; margin-left: 0px !important;"
                                   target="_blank"><i class="fal fa-file-excel"></i> {{tr('export')}}</a>

                            </div>
                            <br/>
                            <table class="table table-bordered table-hover table-striped w-100" id="clients_table">
                                <thead>
                                <tr>

                                    <th>{{tr('email')}}</th>

                                    <th>{{tr('date')}}</th>
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

            var table =  $('#clients_table').DataTable({
                processing: true,
                responsive: true,
                serverSide: true,
                searching: true,
                paging: true,
                ordering: false,
                bInfo: true,
                rowReorder: {
                    selector: 'tr td:not(:first-child)'
                },
                createdRow: function (row, data) {
                    $(row).attr('data-id', data.id);

                },

                ajax: {
                    url: "{{route('CMS.subscriptions.list')}}",
                    type: 'GET',
                },
                columns: [
                    {data: 'email', name: 'email'},
                    {data: 'date', name: 'date'},
                ],

            });











        });
    </script>

@stop
