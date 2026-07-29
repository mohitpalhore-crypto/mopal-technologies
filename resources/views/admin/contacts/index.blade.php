@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">

Contact Enquiries

</h2>

<table class="table table-bordered">

<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Phone</th>

<th>Service</th>

<th>Budget</th>

<th>Date</th>

</tr>

</thead>

<tbody>

@foreach($contacts as $contact)

<tr>

<td>{{ $contact->id }}</td>

<td>{{ $contact->name }}</td>

<td>{{ $contact->email }}</td>

<td>{{ $contact->phone }}</td>

<td>{{ $contact->service }}</td>

<td>{{ $contact->budget }}</td>

<td>{{ $contact->created_at->format('d M Y') }}</td>

</tr>

@endforeach

</tbody>

</table>

{{ $contacts->links() }}

@endsection