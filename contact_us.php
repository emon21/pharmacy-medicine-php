<?php 

require_once('inc_file/header.php');

require_once('contact_us_process.php');
 ?>
	
	<section id="contact_us">
		
	<h2>Contact US</h2>

		<div class="all_contact">
			<div class="wrapper">
				<!-- <div class="contact_type">
				<address>
					<p>Email:info@gmail.com</p>
					<p>Phone:01811287256</p>
				</address>
				</div>

				<div class="contact_type">
				dsgvdfh
				</div>

				<div class="contact_type">
				dsgvdfh
				</div>

				<div class="contact_type">
				dsgvdfh
				</div> -->

				
 
				<div class="contact_info">
				<div class="contact_map">
					<h2>Location</h2>
					<hr>


				<!-- 	<div id="googleMap" style="height:350px;width:95%;"></div> -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1529395188813!2d90.38084341500753!3d23.741924980741974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b7a02be491%3A0x45a9f97c4d06d4f9!2sLABAID+Specialized+Hospital!5e0!3m2!1sen!2sbd!4v1564934274532!5m2!1sen!2sbd" width="550" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
					<div class="contact_form">
						<h2>Any Suggestion to Message us</h2>

						<p class="contact_form_h2">Contact Form</p>

						<form action="" method="post">
					
						<input type="text" name="name" placeholder="Enter Your Name..." class="input_box"><br/>
					
					
						<input type="text" name="email" placeholder="Enter Your Email..." class="input_box2"><br/>
						
					<input type="text" name="con_Subject" placeholder="Enter Your Subject..." class="input_box3"><br/>
					

					<textarea  rows="5" id="comment" placeholder="Your Message...!" name="massage"></textarea>
					
					<input type="submit" name="message_send" id="" value="Send" class="send_message">
					
					</form>
					
					
					</div>
		</div>
		</div>
			</div>



		</div>

		<div class="wrapper">
			

	</section>

	<script>
	
        function myMap() {
            //var myCenter = new google.maps.LatLng(23.745069, 90.412718);
            var myCenter = new google.maps.LatLng(23.745124, 90.412744);
            var mapProp = {
                center: myCenter,
                zoom: 18,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter
            });
            infowindow = new google.maps.InfoWindow({
                content: '<div class="map"> <strong style="color:#206040;font-size:20px;font-weight:bold;">Grameen Star IT Education</strong><br>New Circular Road,Siddeshwari,Mouchak<br>Dhaka-1217,Bangladesh.<br></div>'
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVHX31IdCnPtmHXxH-rhPfymfyMpunhhM &callback=myMap"></script>




<?php require_once('inc_file/header.php'); ?>