@extends('layouts.app')

@section('content')
<div class="container">

	<h1>
        Edit Generator
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>Edit Generator
        </div>
        <div class="clearfix">

		    {!! Form::model($generator, ['route' => ['admin.generators.update', $generator->id], 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('generators.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
@endsection
