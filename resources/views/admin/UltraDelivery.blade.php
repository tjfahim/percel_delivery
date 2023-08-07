@extends('admin.layouts.master')


@section('main_content')


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
        <th scope="col">Action</th>
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
            <td>
                <form action="{{ route('ultradeliveries.update', ['id' => $ultradeliverie->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-sm btn-success">Deliver</button>
                </form>    

            </td>
              
        </tr>
        @endforeach
    
    </tbody>
  </table>

@endsection
