@extends("layout.master")

@section('styles')
<link rel="stylesheet" href="{{ asset('css/backoffice/contactosBackOffice.css') }}" type="text/css">
@endsection


@section('content')

<!-- como buscar informação -->
<table>
    <tbody>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Topic</th>
        <th>Comment</th>
        @foreach($contacts as $contact)
            <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->surname }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->topic }}</td>
            <td>{{ $contact->comment }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
@endsection