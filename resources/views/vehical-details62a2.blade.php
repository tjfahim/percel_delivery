@include('frontend.layouts.header')


<!--Listing-Image-Slider-->

{{-- 
<section id="listing_img_slider">
  <div><img src="admin/img/vehicleimages/istockphoto-1048532172-612x612.jpg" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="admin/img/vehicleimages/index.html" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="admin/img/vehicleimages/index.html" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="admin/img/vehicleimages/index.html" class="img-responsive"  alt="image" width="900" height="560"></div>
  </section> --}}
<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>{{ $package->name}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>TK {{ $package->price}} </p> Delivary Charge Per Kg.

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>

            <!-- <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>10</h5>
              <p>Time Scheduling</p>
            </li> -->
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{ $package->delivery_type}} Delivary</h5>
              <p>Package Type</p>
            </li>

            <!-- <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>50</h5>
              <p>Total Seats</p>
            </li> -->
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Delivary Overview </a></li>

              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                <p>10:30 am - 5:00 pm</p>
              </div>


              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories">
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>


<tr>
<td>Cash On Delivary</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>

<tr>
<td>Baksh</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
</tr>





<tr>
<td>Rocket</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
</tr>

<tr>
<td>Dutch Bangla Bank</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
</tr>

<td>Quickly Delivary</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
</tr>


<tr>
<td>Quick Service</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
</tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>

      <!--Side-Bar-->
      <aside class="col-md-3">

        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Add Parcel Now</h5>
          </div>
          <form method="post" action="{{ route("ultradeliveries.store")}}" >
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="from_name" placeholder="From Name" required>
            </div>
          <div class="form-group">
              <input type="text" class="form-control" name="to_name" placeholder="To Name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="from_address" placeholder="From Address" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="to_address" placeholder="To Address" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="from_contact_no" placeholder="From Contact No" maxlength="11" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="to_contact_no" placeholder="To Contact No" maxlength="11" required>
            </div>
           
            <div class="form-group">
              <!-- <textarea class="form-control"  placeholder="How would you like to take delivery?" required>
               -->
              <select class="form-control" name="delivery_type"  required>
<option Value = "Select">Select Delivary Type</option>

<option value="Cash On Delivary">Normal</option>
<option value="Payment">Emergency</option>
</select>
</div>
<div class="form-group">
<select class="form-control" name="payment_category"  required>
<option Value = "Select">Select Payment Category</option>

<option value="Cash On Delivary">Cash On Delivary</option>
<option value="Bkash">Bkash</option>
<option value="Rocket">Rocket</option>
<option value="Doutch Bangla Bank">Doutch Bangla Bank</option>
<option value="Others">Others</option>

</select>
</div>
<div class="form-group">
              <input type="text" class="form-control" name="payment_id" placeholder="Enter payment ID/not enter 0" >
            </div>
<div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="Message"></textarea>
            </div>
              
              </textarea>
            </div>
            @if(auth()->check())
            <button class="btn btn-xs uppercase" type="submit" >Submit </button>
            @else
                <a href="#loginform" class="btn btn-xs uppercase">Login to Submit</a>
            @endif
                        </form>
        </div>
      </aside>
      <!--/Side-Bar-->
    </div>

    <div class="space-20"></div>
    <div class="divider"></div>

    {{-- <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Similar Delivary Package</h3>
      <div class="row">
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="vehical-detailsba60.html?vhid=14"><img src="admin/img/vehicleimages/delivery-man-isolated-yellow-with-thumbs-up-because-something-good-has-happened_1368-70622.jpg" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="vehical-detailsba60.html?vhid=14">{{ $package->name}}</a></h5>
              <img src="{{ asset('storage/images/' . $package->image) }}"class="img-responsive"  alt="Image">
              <p class="list-price">Tk {{ $package->price}}</p>

              <ul class="features_list">

             <!-- <li><i class="fa fa-user" aria-hidden="true"></i>50 Seat</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Time Sheduling</li> -->
                <li><i class="fa fa-car" aria-hidden="true"></i>{{ $package->delivery_type}} Delivary</li>
              </ul>
            </div>
          </div>
        </div>
         <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="vehical-details62a2.html?vhid=15"><img src="{{ asset('storage/images/' . $package->image) }}" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="vehical-details62a2.html?vhid=15">Majhira, Bogura To Gabtoli, Dhaka , Suvo EnterPrize</a></h5>
              <p class="list-price">Tk 350</p>

              <ul class="features_list">

             <!-- <li><i class="fa fa-user" aria-hidden="true"></i>50 Seat</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Time Sheduling</li> -->
                <li><i class="fa fa-car" aria-hidden="true"></i>Normal Delivary</li>
              </ul>
            </div>
          </div>
        </div>
 
      </div>
    </div>
    <!--/Similar-Cars--> --}}

  </div>
</section>
<!--/Listing-detail-->
@include('frontend.layouts.footer')
