@extends('template')
@section('content')
	<h3>Register new Guest</h3>
	{!! Form::model($guest, array('url'=>'guest/'.$guest->id, 'method'=>'patch')) !!}
	<table class="table table-bordered">
		<tr>
			<td width="50%"><strong>Full Name:</strong></td><td width="50%"><strong>ID Card No:</strong></td>
		</tr>
		<tr>						
			<td>{!! Form::text('guest_name',null,['class'=>'form-control']) !!}</td>
			<td>{!! Form::text('guest_idcard',null,['class'=>'form-control']) !!}</td>
		</tr>
		<tr>
			<td><strong>Passport No:</strong></td><td><strong>Drive License No:</strong></td>
		</tr>
		<tr>
			<td>{!! Form::text('guest_passport',null,['class'=>'form-control']) !!}</td>
			<td>{!! Form::text('guest_drivelic',null,['class'=>'form-control']) !!}</td>
		</tr>
		
		<tr>
			<td><strong>Company:</strong></td><td><strong>Telephone:</strong></td>
		</tr>
		<tr>
			<td>{!! Form::text('guest_company',null,['class'=>'form-control']) !!}</td>
			<td>{!! Form::text('guest_phone',null,['class'=>'form-control']) !!}</td>
		</tr>
		<tr>
			<td><strong>Type:</strong></td><td><strong>Photo:</strong></td>
		</tr>
		<tr>
			<td>{!! Form::select('guest_type',array('Supplier'=>'Supplier',
											        'Contractor'=>'Contractor',
											        'Third Party'=>'Third Party',
											        'Auditor'=>'Auditor',
											        'Family'=>'Family',
											        'NOV Employee'=>'NOV Employee',
											        'Customer'=>'Customer'),null,['class'=>'form-control']) 
				!!}
			</td>
			<td>{!! Form::file('photo',null,['class'=>'form-control']) !!}</td>
		</tr>
		<tr>
             <td colspan="2"><strong>Note:</strong></td>
		</tr>
		<tr>
			<td colspan="2">
				{!! Form::textarea('note',null,['class'=>'form-control']) !!}
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
							  {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
							  {!! link_to('guest','Back',['class'=>'btn btn-warning']) !!}
						   </td>
		</tr>						
	</table>
	{!! Form::close() !!}
@stop