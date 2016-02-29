

<li>
	<a href="{!! route('admin.roles.index') !!}">
		<div class="notifications label label-warning">{!! App\Models\Role::count() !!}</div>
		<p>Roles</p>
	</a>
</li>

<li>
	<a href="{!! route('admin.users.index') !!}">
		<div class="notifications label label-warning">{!! App\Models\User::count() !!}</div>
		<p>Users</p>
	</a>
</li>

<li>
	<a href="{!! route('admin.colors.index') !!}">
		<div class="notifications label label-warning">{!! App\Models\Color::count() !!}</div>
		<p>Colors</p>
	</a>
</li>

<li>
	<a href="{!! route('admin.sizes.index') !!}">
		<div class="notifications label label-warning">{!! App\Models\Size::count() !!}</div>
		<p>Sizes</p>
	</a>
</li>

<li>
	<a href="{!! route('admin.items.index') !!}">
		<div class="notifications label label-warning">{!! App\Models\Item::count() !!}</div>
		<p>Items</p>
	</a>
</li>