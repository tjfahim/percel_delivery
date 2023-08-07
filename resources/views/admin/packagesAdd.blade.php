


@extends('admin.layouts.master')


@section('main_content')



<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class=" order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-2 mt-2">Add Service Package</p>
                  <form class="mx-1 mx-md-4" method="post" action="{{ route('packages.store') }}" enctype="multipart/form-data">
                    @csrf <!-- Add CSRF token for form submission security -->
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="price">Price</label>
                            <input type="number" id="price" name="price" class="form-control" />
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="delivery_type">Delivery Type</label>
                            <input type="text" id="delivery_type" name="delivery_type" class="form-control" />
                            @error('delivery_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="image">Image</label>
                            <input type="file" id="image" name="image" />
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                
                    <div class="mx-3">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
                
                
  
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
