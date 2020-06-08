@extends('CMS.layout.components.table.primary')

@section('primaryTableContent')
                    
                    <div class="panel-container show">
                        <div class="panel-content">
                            {{--datatable--}}
                            <table id="table-primary" class="table table-bordered table-hover table-striped w-100">
                                <thead>
                                <tr>
                                    <th>{{ tr('id') }}</th>
                                    <th>{{tr('module')}}</th>
                                    <th>{{tr('title')}}</th>
                                    <th>{{tr('action')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($data as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->module}}</td>
                                        <td>{{$row->title}}</td>
                                        <td>
                                            @can('update'.$gateSuffix)
                                                <a href="{{route($links->edit,$row->id)}}"
                                                   class="btn btn-outline-primary btn-icon waves-effect waves-themed">
                                                    <i class="fal  fa-pen "></i>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection




