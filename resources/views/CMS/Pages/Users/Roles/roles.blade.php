@extends('CMS.layout.cms')

@section('header')
    <title>Connect - {{tr('roles')}} </title>
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
                                    {{tr('roles')}} <span class="fw-300"><i> </i></span>
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                                </div>
                            </div>


                            <div class="panel-container show">
                                <div class="panel-content">

                                    @can('createRoles')
                                    <a href="#" class="btn btn-primary waves-effect waves-themed addnewrole" id="addnewrole"
                                       data-toggle="modal" data-target=".add-role-modal-right">{{tr('new role')}}</a>
                                    @endcan

                                        @can('createPermission')
                                        <a href="#" class="btn btn-primary waves-effect waves-themed"
                                           data-toggle="modal" data-target=".add-permission-modal-right">{{tr('new permission')}}</a>
                                        @endcan



                                        <table id="dt-basic-roles" class="table table-bordered table-hover table-striped w-100">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{tr('name')}}</th>
                                            <th>Guard</th>
                                            <th>{{tr('permissions')}}</th>
                                            <th>{{tr('action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($roles as $role)

                                            @can('viewRoles')
                                            <tr>
                                                <th  >{{$role->id}}</th>
                                                <td>{{$role->name}}</td>
                                                <td>{{$role->guard_name}}</td>
                                                <td>
                                                    @canany(['changeRolePermissions','viewRoles'])
                                                    <a href="#{{$role->username}}"
                                                       class="btn btn-outline-primary   waves-effect waves-themed getRoleWithPermission"
                                                       data-id="{{$role->id}}" data-toggle="modal" data-target=".role-permission-modal-right">
                                                        <i class="fal @if(Auth::user()->cannot('changeRolePermissions'))fa-eye @else fa-lock-open @endif"></i>
                                                    </a> @endcan

                                                </td>
                                                <td>
                                                    @can('updateRoles')
                                                    <a href="#{{$role->username}}"  data-id="{{$role->id}}" data-toggle="modal" data-target=".add-role-modal-right"
                                                       class="btn btn-outline-primary btn-icon waves-effect waves-themed getRoleWithPermission editrole">
                                                        <i class="fal fa-pen"></i>
                                                    </a>
                                                    @endcan
                                                        @can('deleteRoles')
                                                            @if($role->protected == 'false')
                                                                <a href="javascript:void(0);" data-id="{{$role->id}}"
                                                                   data-toggle="modal" data-target="#delete-modal-alert"
                                                                   class="btn btn-outline-danger btn-icon waves-effect waves-themed  deleterule ">
                                                                    <i class="fal fa-ban"></i>
                                                                </a>
                                                            @endif
                                                        @endcan

                                                </td>
                                            </tr>
                                            @endcan
                                        @endforeach

                                        </tbody>
                                    </table>




                                </div>
                            </div>


                                @canany(['changeRolePermissions','viewRoles'])
                                <div class="modal fade role-permission-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-right">
                                        <form action="{{route('CMS.user.roles.change.permissions')}}"  method="post">
                                            {{csrf_field()}}
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">{{tr('assign role permission')}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card mb-g">
                                                    <div class="card-body p-2">
                                                        <div class="frame-wrap">


                                                            <div class="demo">
                                                                <input type="hidden" name="role_id" id="role_id">
                                                                @php $module = ''; @endphp
                                                                @foreach($permissions as $permission)
                                                                    @if ($module != $permission->module)
                                                                        <hr>
                                                                        <h5 class="frame-wrap "><b>{{$permission->module}}</b>: </h5>
                                                                    @endif
                                                                    @php $module = $permission->module @endphp
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="permissions[]" value="{{$permission->name}}" class="custom-control-input" id="{{$permission->name}}">
                                                                        <label class="custom-control-label" for="{{$permission->name}}">{{$permission->can}} ({{$permission->name}})</label>
                                                                    </div>

                                                                @endforeach

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                @can('changeRolePermissions')
                                                <button type="submit" class="btn btn-primary">{{tr('save changes')}}</button>
                                                    @endcan
                                            </div>
                                        </div> </form>
                                    </div>
                                </div>
                                @endcan


                                @canany(['createRoles','updateRoles'])
                                <div class="modal fade add-role-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-right">
                                        <form   id="createroleform" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="role_id" id="role_id_action" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4 rolemodaltitle"> </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card mb-g">
                                                        <div class="card-body p-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="username">{{tr('role name')}}</label>
                                                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" required>
                                                            </div>
                                                            @if($errors->has('name'))
                                                                <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('name') }}</div>
                                                            @endif

                                                            <div class="form-group">
                                                                <label class="form-label" for="has_backend_access">has backend access</label>
                                                                <select name="has_backend_access" class="form-control" id="has_backend_access" required>
                                                                    <option value="true">true</option>
                                                                    <option value="false">false</option>
                                                                </select>
                                                            </div>
                                                            @if($errors->has('has_backend_access'))
                                                                <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('has_backend_access') }}</div>
                                                            @endif


                                                            <div class="form-group">
                                                                <label class="form-label" for="protected">protected</label>
                                                                <select name="protected" class="form-control" id="protected" required>
                                                                    <option value="true">true</option>
                                                                    <option value="false">false</option>
                                                                </select>
                                                            </div>
                                                            @if($errors->has('protected'))
                                                                <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('protected') }}</div>
                                                            @endif



                                                            <div class="form-group">
                                                                <label class="form-label" for="for_registration">for registration</label>
                                                                <select name="for_registration" class="form-control" id="for_registration" required>
                                                                    <option value="true">true</option>
                                                                    <option value="false">false</option>
                                                                </select>
                                                            </div>
                                                            @if($errors->has('for_registration'))
                                                                <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('for_registration') }}</div>
                                                            @endif




                                                            <div class="form-group">
                                                                <label class="form-label" for="guard">Guard Name</label>
                                                                <input type="text" id="guard"  name="guard_name" value="web" class="form-control" readonly required>
                                                            </div>
                                                            @if($errors->has('guard_name'))
                                                                <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('guard_name') }}</div>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                    <button type="submit" class="btn btn-primary">{{tr('save changes')}}</button>
                                                </div>
                                            </div> </form>
                                    </div>
                                </div>
                                    @endcan


                                @can('createPermission')
                                    <div class="modal fade add-permission-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-right">
                                            <form  action="{{route('CMS.user.permission.create')}}" method="post">
                                                {{csrf_field()}}
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title h4 ">{{tr('new permission')}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card mb-g">
                                                            <div class="card-body p-2">


                                                                <div class="form-group">
                                                                    <label class="form-label" for="can">{{tr('text')}}</label>
                                                                    <input type="text" id="can" name="can" value="{{old('can')}}" class="form-control" required>
                                                                </div>
                                                                @if($errors->has('can'))
                                                                    <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('can') }}</div>
                                                                @endif

                                                                <div class="form-group">
                                                                    <label class="form-label" for="permissionName">{{tr('permission')}}</label>
                                                                    <input type="text" id="permissionName" name="permission" value="{{old('permission')}}" class="form-control" required>
                                                                </div>
                                                                @if($errors->has('permission'))
                                                                    <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('permission') }}</div>
                                                                @endif


                                                                <div class="form-group">
                                                                    <label class="form-label" for="module">{{tr('module')}}</label>
                                                                    <input type="text" id="module" name="module" value="{{old('module')}}" class="form-control" required>
                                                                </div>
                                                                @if($errors->has('module'))
                                                                    <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('module') }}</div>
                                                                @endif

                                                                <div class="form-group">
                                                                    <label class="form-label" for="PermissionGuard">Guard Name</label>
                                                                    <input type="text" id="PermissionGuard"  name="guard" value="web" class="form-control" readonly required>
                                                                </div>
                                                                @if($errors->has('guard'))
                                                                    <div class="alert bg-danger-200 text-white errorhas" role="alert">{{ $errors->first('guard') }}</div>
                                                                @endif


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{tr('close')}}</button>
                                                        <button type="submit" class="btn btn-primary">{{tr('save changes')}}</button>
                                                    </div>
                                                </div> </form>
                                        </div>
                                    </div>
                                    @endcan


                                @can('deleteRoles')
                                <div class="modal modal-alert fade" id="delete-modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{tr('delete role')}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{tr('are you sure you want to delete this role?')}}
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="{{route('CMS.user.role.delete')}}">
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

            </main>
@endsection


@section('scripts')

    <script>
        $(document).ready(function() {


            @if($errors->has('permission') || $errors->has('model') )
            $(".add-permission-modal-right").modal();
            @endif

            $(".add-permission-modal-right").on('hide.bs.modal', function(){
                $('#permissionName').val('');
                $('.errorhas').remove();
                $('#module').val('');
            });



            $(document).on('click','.getRoleWithPermission',function (e) {
            e.preventDefault();
            $('#role_id').val($(this).data('id'));
            $.post('{{route('CMS.user.roles.with.permission')}}', {
                id: $(this).data('id'),
                _token: '{{csrf_token()}}'
            }).done(function (data) {
                for (i = 0; i < data.permissions.length; i++) {
                   $('#'+data.permissions[i].name).prop('checked', true);

                }
            });

            @cannot('changeRolePermissions')
            $('.demo').find('input[type=checkbox] ').attr("disabled", true);
            @endcannot


        });
            $(".role-permission-modal-right").on('hide.bs.modal', function(){
                $('.demo').find('input[type=checkbox]:checked').prop('checked', false);
                $('#role_id_action').val('');
            });
            @if($errors->has('name') || $errors->has('guard_name') )
            @if(old('role_id'))
            $(".add-role-modal-right").modal();
            $('#createroleform').attr('action','{{route('CMS.user.role.update')}}');
            $('.rolemodaltitle').html('{{tr('edit role')}}');
            $('#role_id_action').val({{ $errors->first('role_id') }});
            $('#role_id_action').attr('name','role_id');
            $('#role_id_action').val({{old('role_id')}});
            @else
            $(".add-role-modal-right").modal();
            $('#createroleform').attr('action','{{route('CMS.user.role.create')}}');
            $('.rolemodaltitle').html('{{tr('create new role')}}');
            $('#role_id_action').removeAttr('name');
            @endif
            @endif
            $(".add-role-modal-right").on('hide.bs.modal', function(){
                $('#name').val('');
                $('.errorhas').remove();
                $('#createroleform').removeAttr('action');
            });

                $(document).on('click','.addnewrole',function (e) {
                $('#name').val('');
                $('.errorhas').remove();
                $('#createroleform').attr('action','{{route('CMS.user.role.create')}}');
                $('.rolemodaltitle').html('{{tr('create new role')}}');
                $('#role_id_action').removeAttr('name');

                    $('#protected option[value]').removeAttr("selected");
                    $('#has_backend_access option[value]').removeAttr("selected");
                    $('#for_registration option[value]').removeAttr("selected");
                    $('#protected option[value="false"]').attr("selected", "selected");
                    $('#has_backend_access option[value="false"]').attr("selected", "selected");
                    $('#for_registration option[value="false"]').attr("selected", "selected");
                });

            $(document).on('click','.editrole',function (e) {
                $('.errorhas').remove();
                $('#createroleform').attr('action','{{route('CMS.user.role.update')}}');

                $.post('{{route('CMS.user.role.get')}}', {
                    id: $(this).data('id'),
                    _token: '{{csrf_token()}}'
                }).done(function (data) {

                    console.log(data);
                    if(data.protected == 'false'){
                        $('#protected option[value="false"]').attr("selected", "selected");
                        $('#protected option[value="true"]').removeAttr("selected");

                    }else{
                        $('#protected option[value="true"]').attr("selected", "selected");
                        $('#protected option[value="false"]').removeAttr("selected");

                    }






                    if(data.has_backend_access == 'false'){
                        $('#has_backend_access option[value="false"]').attr("selected", "selected");
                        $('#has_backend_access option[value="true"]').removeAttr("selected");
                    }else{
                        $('#has_backend_access option[value="true"]').attr("selected", "selected");
                        $('#has_backend_access option[value="false"]').removeAttr("selected");
                    }

                    if(data.for_registration == 'false'){
                        $('#for_registration option[value="false"]').attr("selected", "selected");
                        $('#for_registration option[value="true"]').removeAttr("selected");
                    }else{
                        $('#for_registration option[value="true"]').attr("selected", "selected");
                        $('#for_registration option[value="false"]').removeAttr("selected");
                    }



                    $('#name').val(data.name);
                    $('#guard').val(data.guard_name);
                    $('.rolemodaltitle').html('{{tr('edit role')}}')
                    $('#role_id_action').attr('name','role_id');
                    $('#role_id_action').val(data.id);
                });
            });

                $(document).on('click','.deleterule',function (e) {
                e.preventDefault();
                $('#deleteid').val($(this).data('id'));
            });
            $("#delete-modal-alert").on('hide.bs.modal', function(){
                $('#deleteid').val('');
            });




            $('#dt-basic-roles').dataTable(
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
