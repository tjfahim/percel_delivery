@extends('admin.layouts.master')


@section('main_content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Message</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{ $contact->id }}</th>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->message }}</td>
            <td>{{ $contact->created_at }}</td>
            <td>
                
                
                <form action="{{ route('contacts.destroy', ['id' => $contact->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this contact?')" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>             
            </td>
        </tr>
        @endforeach
    
    </tbody>
  </table>

@endsection
