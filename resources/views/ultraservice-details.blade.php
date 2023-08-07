@include('frontend.layouts.header')

<!-- /Header -->

<!--Listing-Image-Slider-->








      <!--Side-Bar-->
      <aside class="col-md-6">
<h1 style="text-align:center; color:gray">Ultra Delivery Service</h1>
<hr>
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
<option value="Cash On Delivary">Emergency</option>
<option value="Payment">Ultra Emergency</option>
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

    

  </div>
</section>
<!--/Listing-detail-->
@include('frontend.layouts.footer')
