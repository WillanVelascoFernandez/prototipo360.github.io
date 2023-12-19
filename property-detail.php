<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg" class="img-responsive img-circle" alt="properties"/>
                </div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/3.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/2.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

</div>



<div class="advertisement">
  <h4>Advertisements</h4>
  <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">

<h2>2 room and 1 kitchen apartment</h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="panorama"></div>
<script>
// pannellum.viewer('panorama', {
//     "type": "equirectangular",
//     "panorama": "https://i.imgur.com/3LJD25J.jpg",
//     "autoLoad": true,
//     "autoRotate": -2
// });
pannellum.viewer('panorama', {
  "autoLoad": true,
    "autoRotate": -2,   
    "default": {
        "firstScene": "sala",
        "author": "Willan Velasco",
        "sceneFadeDuration": 1000
    },

    "scenes": {
        "bano": {
            "title": "Baño",
            "hfov": 110,
            "pitch": -3,
            "yaw": 117,
            "type": "equirectangular",
            "panorama": "https://i.imgur.com/3LJD25J.jpg",
            "hotSpots": [
                {
                    "pitch": -2.1,
                    "yaw": 160.9,
                    "type": "scene",
                    "text": "Sala",
                    "sceneId": "sala"
                }
            ]
        },

        "sala": {
            "title": "Zona de descanso",
            "hfov": 110,
            "yaw": 5,
            "type": "equirectangular",
            "panorama": "https://i.imgur.com/iM16XL7.jpg",
            "hotSpots": [
                {
                    "pitch": -0.6,
                    "yaw": -37.1,
                    "type": "scene",
                    "text": "Cuarto de baño",
                    "sceneId": "bano",
                    "targetYaw": -23,
                    "targetPitch": 2
                },
                {
                    "pitch": -0.6,
                    "yaw": 50.1,
                    "type": "scene",
                    "text": "Cuarto de dormir",
                    "sceneId": "cuarto",
                    "targetYaw": -23,
                    "targetPitch": 2
                }
            ]
        },

        "cuarto": {
            "title": "Zona de dormir",
            "hfov": 110,
            "yaw": 5,
            "type": "equirectangular",
            "panorama": "https://i.imgur.com/EcrVXfH.jpg",
            "hotSpots": [
                {
                    "pitch": -0.6,
                    "yaw": 120.1,
                    "type": "scene",
                    "text": "Cuarto de baño",
                    "sceneId": "bano",
                    "targetYaw": -23,
                    "targetPitch": 2
                }
            ]
        }
    }
});
</script>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
  <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service</p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">$ 200,000,000</p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 344 Villa, Syndey, Australia</p>
  
  <div class="profile">
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p>John Parker<br>009 229 2929</p>
  </div>
</div>

    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form">
                <input type="text" class="form-control" placeholder="Full Name"/>
                <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                <input type="text" class="form-control" placeholder="your number"/>
                <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>