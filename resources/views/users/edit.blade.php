@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <h1>New User</h1>
        </div>
	    <div class="clearfix">&nbsp;</div>
        <div class="clearfix">

		    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

		        @include('users.fields')

		    {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
