<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>Field Name</th>
			<th>Field Type</th>
			<th>Is Required</th>
			<th>Has Access Token</th>
			<th>Set Paginater</th>
			<th>Add Soft Delete</th>
			<th>Has Api</th>
    <th width="100px;">Action</th>
    </thead>
    <tbody>
    @foreach($generators as $generator)
        <tr>
            <td>{!! $generator->field_name !!}</td>
			<td>{!! $generator->field_type !!}</td>
			<td>{!! $generator->is_required !!}</td>
			<td>{!! $generator->has_access_token !!}</td>
			<td>{!! $generator->set_paginater !!}</td>
			<td>{!! $generator->add_soft_delete !!}</td>
			<td>{!! $generator->has_api !!}</td>
            <td>
                <a href="{!! route('generators.edit', [$generator->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('generators.delete', [$generator->id]) !!}" onclick="return confirm('Are you sure wants to delete this Generator?')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
