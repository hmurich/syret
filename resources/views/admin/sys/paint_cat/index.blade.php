@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row">
    <div class='col-md-12'>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $title }}</h3>
            </div>
        <div class="box-body">
        	<table class="table table-striped">
                <tr>
        	        <th>id</th>
                    <th>Наименование</th>
                    <th>Создан</th>
        	        <th>
                        <a href='{{ action("Admin\SysPainterCatController@getItem") }}'>
                            <i class="glyphicon glyphicon-plus"></i>
                        </a>
                    </th>
        	    </tr>
                @foreach($items as $i)
            	    <tr>
            	        <td>{{ $i->id }}</td>
            	        <td>{{ $i->name }}</td>
                        <td>{{ $i->created_at }}</td>
            	        <td>
                            <a href="{{ action("Admin\SysPainterCatController@getItem", $i->id) }}" >
                                <i class="glyphicon glyphicon-edit "></i>
            				</a>
                            <a href="{{ action("Admin\SysPainterCatController@getDelete", $i->id) }}" >
                                <i class="glyphicon glyphicon-remove "></i>
            				</a>
            			</td>
            	    </tr>
                @endforeach
            </table>
        </div>
        <div class="box-footer clearfix">
        	{!! $items->render() !!}
        </div>
    </div>
</div>

@endsection
