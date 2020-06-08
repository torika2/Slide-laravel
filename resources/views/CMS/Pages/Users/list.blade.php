@extends('CMS.layout.cms')

@section('header')
    <title>Connect - {{tr('users')}} </title>
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
                        <h2> {{tr('users')}} <span class="fw-300"><i>{{tr('list')}}</i></span>
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

                            @can('createUser')
                            <a href="{{route('CMS.user.add')}}" class="btn btn-primary waves-effect waves-themed">{{tr('new user')}}</a>
                            @endcan

                            @can('viewUser')
                            <form method="get">
                                <div class="form-group   col-xl-6" style="float: left">
                                    <label class="form-label" for="simpleinput"></label>
                                    <input type="text" placeholder="{{tr('search')}} {{tr('fullname')}} {{tr('or')}} {{tr('username')}}" name="search" value="{{request('search')}}" class="form-control">
                                </div>
                                <div class="form-group col-xl-4" style="display: inline-block; margin-top: 18px;">
                                    <button type="submit" class="btn btn-success">{{tr('search')}}</button>
                                    @if(request('search'))
                                        <a href="{{route('CMS.user.list')}}" class="btn btn-danger">x</a>
                                    @endif
                                </div>
                            </form>
                                    <br>

                         <table id="dt-basic-users" class="table table-bordered table-hover table-striped w-100">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{tr('fullname')}}</th>
                                    <th>{{tr('username')}}</th>
                                    <th>{{tr('email')}}</th>

                                    <th>{{tr('roles')}}</th>
                                    <th>{{tr('action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->fullname}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                                <a href="#"
                                                   class="btn btn-outline-primary   waves-effect waves-themed geruserroles"
                                                   data-id="{{$user->id}}" data-toggle="modal" data-target=".user-role-modal-right">
                                                    <i class="fal @if(Auth::user()->cannot('assignRole')) fa-eye @else fa-users @endif"></i>
                                                </a>
                                        </td>
                                        <td>
                                            @canany(['updateUser','viewUser'])
                                            <a href="{{route('CMS.user.edit',$user->username)}}"
                                               class="btn btn-outline-primary btn-icon waves-effect waves-themed">
                                                <i class="fal @if(Auth::user()->cannot('updateUser'))fa-eye @else fa-pen @endif"></i>
                                            </a>
                                            @endcan

                                            @can('deleteUser')
                                            <a href="javascript:void(0);" data-id="{{$user->id}}"
                                               data-toggle="modal" data-target="#delete-modal-alert"
                                               class="btn btn-outline-danger btn-icon waves-effect waves-themed deleteuser">
                                                <i class="fal fa-ban"></i>
                                            </a>
                                                @endcan

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$users->appends(Request::query())->render()}}
                            @endcan



                                @canany(['viewUser','assignRole'])
                                    <div class="modal fade user-role-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-right">
                                            <form action="{{route('CMS.user.assigne.role.user')}}"  method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="user_id" id="user_id">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title h4">{{tr('assign role to user')}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card mb-g">
                                                            <div class="card-body p-2">
                                                                <div class="frame-wrap">


                                                                    <div class="demo">


                                                                        <h5 class="frame-wrap "><b>{{tr('roles')}}</b>: </h5>
                                                                        @foreach($roles as $role)
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" name="roles[]" value="{{$role->name}}" class="custom-control-input" id="{{$role->name}}">
                                                                                <label class="custom-control-label" for="{{$role->name}}">{{$role->name}}</label>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                        @can('assignRole')
                                                            <button type="submit" class="btn btn-primary">{{tr('save changes')}}</button>
                                                        @endcan
                                                    </div>
                                                </div> </form>
                                        </div>
                                    </div>
                                @endcan



                                @can('deleteUser')
                            <div class="modal modal-alert fade" id="delete-modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{tr('delete user')}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{tr('are you sure you want to delete this user?')}}
                                        </div>
                                        <div class="modal-footer">
                                            <form method="post" action="{{route('CMS.user.delete')}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="" id="deleteid">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                            <button type="submit" class="btn btn-danger">{{tr('yes, delete')}}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    @endcan

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection


@section('scripts')

    <script>

            $(document).on('click','.deleteuser',function (e) {
            e.preventDefault();
            $('#deleteid').val($(this).data('id'));

        });




        $(document).ready(function() {

                $(document).on('click','.geruserroles',function (e) {
                e.preventDefault();
                /*$('#role_id').val($(this).data('id'));*/
                $.post('{{route('CMS.user.roles.getuser.roles')}}', {
                    id: $(this).data('id'),
                    _token: '{{csrf_token()}}'
                }).done(function (data) {
                    console.log(data);
                    for (i = 0; i < data.length; i++) {
                        $('#' + data[i]).prop('checked', true);
                    }
                });
                @cannot('assignRole')
                $('.demo').find('input[type=checkbox] ').attr("disabled", true);
                @endcannot
                $('#user_id').val($(this).data('id'));
            });


            $(".user-role-modal-right").on('hide.bs.modal', function(){
                $('.demo').find('input[type=checkbox]:checked').prop('checked', false);
                $('#user_id').val('');
            });




            $('#dt-basic-users').dataTable(
                {
                    responsive: true,
                    searching: false,
                    paging: false,
                    ordering: false,
                    bInfo:false,

                });

        });
    </script>
@stop
