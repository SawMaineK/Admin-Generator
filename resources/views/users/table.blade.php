<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>Name</th>
		<th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->name !!}</td>
			<td>{!! $user->email !!}</td>
			<td>{!! $user->password !!}</td>
            <td>
                <a href="{!! route('users.edit', [$user->id]) !!}" class="table-actions"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('users.delete', [$user->id]) !!}" class="table-actions" onclick="return confirm('Are you sure wants to delete this User?')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
