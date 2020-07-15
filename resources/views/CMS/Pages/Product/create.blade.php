@extends('CMS.layout.cms')

@section('header')
    <title>{{sitename()}} - {{tr('product')}}</title>

@stop




@section('content')
    @if(!isset($data))
        {{$data = null}}
    @endif
    @if(!isset($gallery))
        {{$gallery = null}}
    @endif
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
                            {{tr('product')}} <span class="fw-300"><i></i></span>
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


                            <form method="post" id="form" action="{{route('CMS.product.store')}}"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if($data)
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                @endif

                                <div class="col-md-12">
                                    @include('CMS.layout.includes.langTabComponent')

                                    <div class="tab-content p-3">
                                        @php $activator = 0; @endphp
                                        @foreach(getLocales() as $loc)
                                            <div class="tab-pane fade @if($activator == 0)  active show @endif"
                                                 id="locale-{{$loc->locale}}" role="tabpanel">


                                                @include('CMS.layout.components.textField',
                                                [  'lang' => $loc,
                                                    'data' => $data,
                                                    'column' => 'title',
                                                    'label' => 'title',
                                                    'placeHolder' => '',
                                                    'helpText' => '',

                                                    ])


                                                @include('CMS.layout.components.textarea',
                                               [  'lang' => $loc,
                                                   'data' => $data,
                                                   'column' => 'meta_description',
                                                   'label' => 'meta description',
                                                   'placeHolder' => '',
                                                   'helpText' => '' ])

                                                @include('CMS.layout.components.textarea',
                                                [  'lang' => $loc,
                                                    'data' => $data,
                                                    'column' => 'meta_keywords',
                                                    'label' => 'meta keywords',
                                                    'placeHolder' => '',
                                                    'helpText' => '' ])


                                                @include('CMS.layout.components.textarea',
                                                [  'lang' => $loc,
                                                    'data' => $data,
                                                    'column' => 'short_text',
                                                    'label' => 'short_text',
                                                    'placeHolder' => '',
                                                    'helpText' => '' ])

                                                @include('CMS.layout.components.editorTextarea',
                                            [  'lang' => $loc,
                                                'data' => $data,
                                                'column' => 'text',
                                                'label' => 'specifications',
                                                'placeHolder' => '',
                                                'helpText' => '',
                                                ])


                                                @include('CMS.layout.components.editorTextarea',
                                        [  'lang' => $loc,
                                            'data' => $data,
                                            'column' => 'description',
                                            'label' => 'product description',
                                            'placeHolder' => '',
                                            'helpText' => '',
                                            ])


                                                <hr>
                                                <h2>
                                                    {{tr('technical details')}} <span class="fw-300"><i></i></span>
                                                </h2>
                                                @foreach($details as $detail)


                                                    <div class="form-group col-md-12">
                                                        <label class="form-label"
                                                               for="details[{{$loc->locale}}][{{$detail->id}}]">{{$detail->title}}
                                                            ({{$loc->locale}})</label>
                                                        <input type="text"
                                                               id="details[{{$loc->locale}}][{{$detail->id}}]"
                                                               name="details[{{$loc->locale}}][{{$detail->id}}]"
                                                               @if($data)
                                                               value="@if(isset($data->getTranslation('details',$loc->locale)[$detail->id])){{$data->getTranslation('details',$loc->locale)[$detail->id]}}@endif"
                                                               @endif
                                                               class="form-control">
                                                    </div>

                                                @endforeach
                                                <hr>


                                            </div>
                                            @php $activator++ @endphp
                                        @endforeach
                                    </div>


                                    @include('CMS.layout.components.textField',
                                                [  'lang' => null,
                                                    'data' => $data,
                                                    'column' => 'price',
                                                    'label' => 'price',
                                                    'placeHolder' => '',
                                                    'helpText' => '',

                                                    ])



                                    @include('CMS.layout.components.textField',
                                              [  'lang' => null,
                                                  'data' => $data,
                                                  'column' => 'sale_price',
                                                  'label' => 'sale price',
                                                  'placeHolder' => '',
                                                  'helpText' => '',

                                                  ])




                                    @include('CMS.layout.components.checkbox',
                                   [   'lang' => null,
                                       'data' => $data,
                                       'column' => 'stock',
                                       'label' => 'in stock',
                                       'placeHolder' => ''])


                                    @include('CMS.layout.components.singleImg',
                                              [   'lang' => null,
                                                  'data' => $data,
                                                  'column' => 'cover',
                                                  'label' => 'main image',
                                                  'class' => 'aaa',
                                                  'placeHolder' => '',
                                                  'folder' => 'img',
                                                  'helpText' => '',
                                                  'model' => 'products',
                                                  'gate'  => 'updateProduct',
                                                  'webp'=>true]
                                                  )



                                    @include('CMS.layout.components.images',
                                   [   'lang' => null,
                                       'data' => $data,
                                       'values' => $gallery,
                                       'column' => 'image',
                                       'label' => 'images',
                                       'placeHolder' => '',
                                       'folder' => 'img',
                                       'helpText' => '',
                                       'model' => 'productimages',
                                       'gate'  => 'updateProduct',
                                        'webp'=>true
                                        ])


                                    @if($data)
                                        <br>
                                        <hr>
                                        <h2>
                                            {{tr('buy it online')}} <span class="fw-300"><i></i></span>
                                        </h2>
                                        <div class="col-sm-12 d-flex align-items-center justify-content-start">
                                            <button
                                                class="btn btn-primary waves-effect waves-themed addnewlink">  {{tr('add new link')}}</button>
                                        </div>
                                        <br>

                                        <table class="table table-bordered table-hover table-striped w-100"
                                               id="data_table">
                                            <thead>
                                            <tr>
                                                <th>ord</th>
                                                <th>{{tr('title')}}</th>
                                                <th>{{tr('action')}}</th>
                                            </tr>
                                            </thead>
                                        </table>

                                    @endif


                                </div>


                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <button type="submit"
                                                class="btn btn-primary">{{tr('save changes')}}</button>
                                        <a href="{{route('CMS.product.list')}}"
                                           class="btn btn-danger">{{tr('cancel')}}</a>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>


    <div class="modal fade" id="links-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title teamtitle">{{tr('add/edit links')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formlinks" enctype="multipart/form-data" novalidate="novalidate">
                        {{csrf_field()}}
                        <input type="hidden" name="action" id="action">
                        <input type="hidden" name="id" id="linkid">

                        <div class="form-group col-md-6">
                            <label class="form-label" for="title">{{tr('title')}}</label>
                            <input type="text" name="title" id="title" required class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="form-label" for="link">{{tr('link')}}</label>
                            <input type="text" name="link" id="link" required class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="form-label" for="image">{{tr('logo')}}</label>
                            <input type="file" name="image" id="image" required accept="image/*"
                                   class="form-control">

                            <div id="link_img">

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit"
                                        class="btn btn-primary">{{tr('save changes')}}</button>
                                <button type="button" data-dismiss="modal"
                                        class="btn btn-danger">{{tr('cancel')}}</button>
                            </div>
                        </div>

                    </form>


                </div>


                <div class="modal-footer">


                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')

    <script>
        @if($data)
        $(document).ready(function () {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#data_table').DataTable({
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
                    url: "{{route('CMS.product.link.list',$data->id)}}",
                    type: 'GET',
                },
                columns: [
                    {data: 'ord', name: 'ord'},
                    {data: 'title', name: 'title'},
                    {data: 'action', name: 'action', orderable: false},
                ],

            });
            table.on('row-reorder', function (e, details) {
                if (details.length) {
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
                        url: "{{route('CMS.product.link.reOrder')}}",
                        data: {rows}
                    }).done(function () {
                        table.ajax.reload()
                    });

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
                        $.post('{{route('CMS.product.link.delete')}}', {
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

            $('body').on('click', '.addnewlink', function (e) {
                e.preventDefault();
                $('#links-modal').modal('show');
                $('#action').val('new');
                $('#linkid').val('');
                $('#link_img').html('');
            });


            $('body').on('click', '.editLinks', function (e) {
                e.preventDefault();
                $('#links-modal').modal('show');
                $('#action').val('edit');
                $('#link_img').html('');
                $('#image').removeAttr("required");


                $.post('{{route('CMS.product.link.get')}}', {
                    id: $(this).data('id'),
                    _token: '{{csrf_token()}}'
                }).done(function (data) {
                    $('#linkid').val(data.id);
                    $('#title').val(data.title);
                    $('#link').val(data.link);

                    $('#link_img').html(`<br><img src="/files/img/` + data.image + `" class="img-preview" height="100px">`)

                });


            });


            if ($("#formlinks").length > 0) {

                $("#formlinks").validate({
                    ignore: ".ui-tabs-hide :input",
                    submitHandler: function (form) {

                        var form = $('#formlinks')[0];
                        var data = new FormData(form);
                        $.ajax({
                            url: '{{route('CMS.product.link.store',$data->id)}}',
                            type: "POST",
                            enctype: 'multipart/form-data',
                            data: data,
                            processData: false,
                            contentType: false,
                            cache: false,
                            timeout: 600000,
                            success: function (data) {

                                console.log(data);
                                if (data.success) {
                                    $('#links-modal').modal('hide');
                                    $('#formlinks').trigger("reset");
                                    $('#data_table').DataTable().ajax.reload();
                                    Swal.fire('{{tr('success')}}!', data.success, 'success');
                                } else if (data.error) {
                                    $('#formlinks').trigger("reset");
                                    $('#links-modal').modal('hide');
                                    Swal.fire('{{tr('error')}}!', data.error, 'error');
                                    $('#data_table').DataTable().ajax.reload();
                                }

                            },
                            error: function (data) {
                                Swal.fire('{{tr('error')}}!', data.responseJSON.message, 'error');
                                $('#teams_table').DataTable().ajax.reload();

                            }
                        });

                    }
                })
            }


        });
        @endif
    </script>
@stop
