@extends('admin.layouts.master')


@section('main_content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subscribers as $subscriber)
        <tr>
            <th scope="row">{{ $subscriber->id }}</th>
            <td>{{ $subscriber->email }}</td>
            <td>{{ $subscriber->created_at }}</td>
            <td>
                
                
                <form action="{{ route('subscribers.destroy', ['id' => $subscriber->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this subscriber?')" style="display: inline-block;">
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
