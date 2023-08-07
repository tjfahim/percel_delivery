@extends('user.layouts.master')


@section('main_content')

<a href="/delivery" class="btn btn-primary">Add More Couriar</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">From Name</th>
        <th scope="col">To Name</th>
        <th scope="col">To Address</th>
        <th scope="col">To Contact</th>
        <th scope="col">Status</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ultradeliveries as $ultradeliverie)
        <tr>
            <th scope="row">{{ $ultradeliverie->id }}</th>
            <td>{{ $ultradeliverie->from_name }}</td>
            <td>{{ $ultradeliverie->to_name }}</td>
            <td>{{ $ultradeliverie->to_address }}</td>
            <td>{{ $ultradeliverie->to_contact_no }}</td>
            <td>{{ $ultradeliverie->status }}</td>
            <td>{{ $ultradeliverie->created_at }}</td>
           
        </tr>
        @endforeach
    
    </tbody>
  </table>

@endsection
