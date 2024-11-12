@extends('layouts.rentcar')
@section('title','Upload Post')

@section('content')

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Upload Post</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Upload Post</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
<div class="uploadcontainer">  
  <form id="contact" action="{{route('car_details.store')}}" method="POST" enctype=multipart/form-data>
     @csrf
    <h2><a>Upload Car</a></h2>
    <h4><a>Provide The Details</a></h4>
    <fieldset>
      <input placeholder="Car name" type="text" name="carname"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Car Price Per Day" type="number" name="carprice"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Car Model" type="number" name="carmodel"  required autofocus>
    </fieldset>

    <fieldset>   
    <input placeholder="Car Seats" type="number" name="carseats"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Address" name="address" type="text"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" value="{{ Auth::user()->number }}" name="personnumber" type="tel" required>
    </fieldset>
    <fieldset>
   <input id="carpic" type="file" name="carpic"  required autofocus>
    </fieldset>
  <input style="display:none"  value='{{ Auth::user()->id }}' name="user_id"/>
    <fieldset>
 
  <select name="posttype" id="posttype">
  <option value="" disabled selected>Select Car Type</option>
    <option value="With Driver">With Driver</option>
    <option value="Without Driver">Without Driver</option>
  </select>
    </fieldset>

    <fieldset>
    <select name="location" id="Location" required>
    <option value="" disabled selected>Select The City</option>
    <option value="Jalandhar">Jalandhar</option>
    <option value="" disabled>Phagwara</option>
    <option value="Ludhiana">Ludhiana</option>
    <option value="Delhi">Delhi</option>
    <option value="Moradabad">Moradabad</option>
    <option value="Bijnor">Bijnor</option>
    <option value="Ghaziabad">Ghaziabad</option>
    <option value="Noida">Noida</option>
    <option value="Pune">Pune</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Haridwar">Haridwar</option>
    <option value="Rishikesh">Rishikesh</option>
    <option value="Bhakkar">Bhakkar</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Jammu">Jammu</option>
    <option value="Manali">Manali</option>
  </select>

    </fieldset>
    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
   
  </form>
</div>

</section>


@endsection