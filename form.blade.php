@extends('layout.app')
@section('pageTitle', 'Vue Tutorial')
@section('mainContent')
    <div id="root" class="container">
    	@if(count($projects)>=1)
    	<table class="table">
    		<thead>
    			<th>Project Name</th>
    			<th>Project Description</th>
    		</thead>
    		<tbody>
    			@foreach($projects as $key=>$value)
    			<tr>
	    			<td>{{ $value->name }}</td>
	    			<td>{{ $value->description }}</td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
   		@endif

		@include('notification')

        <form action="form" method="post">
        	{{csrf_field()}}
        	<div class="form-group row">
        		<label class="col-md-2 control-label">Project Name</label>
        		<div class="col-md-10">
        			<input type="text" class="form-control" name="name" id="name">
        		</div>
        	</div>
			<div class="form-group row">
				<label class="col-md-2 control-label">Project Description</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="description" id="description">
				</div>
			</div>
			<div class="form-group row">
				<input type="Submit" class="btn btn-success" >
			</div>
        </form>
    </div>
@endsection
@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/js/app.js"></script>
@endsection