@include('frontend.layouts.header')

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Emergency Courier Service</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Emergency Courier Service</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
<p><span>{{ $packages->count() }} Listings</span></p>
</div>
</div>

@foreach ($packages as $packages)



        <div class="product-listing-m gray-bg">
          <div class="product-listing-img">
            @if($packages->image)
            <img src="{{ asset('storage/images/' . $packages->image) }}"class="img-responsive"  alt="Image">

            @else 
            <span>No image found!</span>
            @endif
          </div>
          <div class="product-listing-content">
            <h5><a href="{{ route('packages.details_page', ['id' => $packages->id]) }}">{{ $packages->name}}</a></h5>
            <p class="list-price">{{ $packages->price}}</p>
            <ul>
              <!-- <li><i class="fa fa-user" aria-hidden="true"></i>50 Total seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Time</li> -->
              <li><i class="fa fa-motorcycle" aria-hidden="true"></i>{{ $packages->delivery_type}}</li>
            </ul>
            <a href="{{ route('packages.details_page', ['id' => $packages->id]) }}" class="btn">
              View Details
              <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          </a>
          </div>
        </div>
       @endforeach
   </div>

      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your  Delivery </h5>
          </div>
          <div class="sidebar_filter">
            <form action="http://eneedei.com/search-carresult.php" method="post">
              <div class="form-group select">
                <select class="form-control" name="brand">
                  <option>Select Branch</option>

                  <option value="15">Gabtoli, Dhaka To Magihira, Bogura</option>
<option value="16">Majhira, Bogura To Gabtoli, Dhaka</option>
<option value="17">Majhira, Bogura  to New Market,Dhaka</option>

                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="fueltype">
                  <option>Select Delivery Package</option>
<option value="Emergency Delivary">Emergency Delivery</option>
<option value="Normal Delivary">Normal Delivery</option>
<option value="Others">Others</option>
                </select>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Delivery</button>
              </div>
            </form>
          </div>
        </div>

        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-motorcycle" aria-hidden="true"></i> Recently Listed Delivery Package</h5>
          </div>
          <div class="recent_addedcars">
            <ul>

              <li class="gray-bg">
                <div class="recent_post_img"> <a href="vehical-details62a2.html?vhid=15"><img src="admin/img/vehicleimages/istockphoto-1048532172-612x612.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="vehical-details62a2.html?vhid=15">Majhira, Bogura To Gabtoli, Dhaka , Suvo EnterPrize</a>
                  <p class="widget_price">TK. 350 Delivery Charge Per Kg</p>
                </div>
              </li>
              
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="vehical-detailsba60.html?vhid=14"><img src="admin/img/vehicleimages/delivery-man-isolated-yellow-with-thumbs-up-because-something-good-has-happened_1368-70622.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="vehical-detailsba60.html?vhid=14">Majhira, Bogura To Gabtoli, Dhaka , Suvo EnterPrize</a>
                  <p class="widget_price">TK. 350 Delivery Charge Per Kg</p>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar-->
    </div>
  </div>
</section>
<!-- /Listing-->

<!--Footer -->
@include('frontend.layouts.footer')
