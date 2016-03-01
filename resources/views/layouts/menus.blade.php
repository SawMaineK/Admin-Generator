

<li>
	<a href="{!! route('admin.users.index') !!}">
		<div class="notifications label label-warning">{!! App\Models\User::count() !!}</div>
		<p>Users</p>
	</a>
</li>

<li>
	<a href="{!! route('admin.gcms.index') !!}">
		<div class="notifications label label-warning">{!! App\Models\Gcm::count() !!}</div>
		<p>Gcms</p>
	</a>
</li>