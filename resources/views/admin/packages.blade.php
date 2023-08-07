@extends('admin.layouts.master')


@section('main_content')

<a href="{{ route('packages.create')}}"  class="btn btn-primary mb-3">Add Service Package</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Delivery Type</th>
        <th scope="col">Images</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($packages as $package)
        <tr>
            <th scope="row">{{ $package->id }}</th>
            <td>{{ $package->name }}</td>
            <td>{{ $package->price }}</td>
            <td>{{ $package->delivery_type }}</td>
            <td>{{ $package->image }}</td>
            <td>
                
                <a href="{{ route('packages.edit', ['package' => $package->id]) }}" class="btn btn-primary btn-sm" style="display: inline-block;">Edit</a>

                <!-- Delete button -->
                <form action="{{ route('packages.destroy', ['package' => $package->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this package?')" style="display: inline-block;">
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
