<footer id="footer">
		<div class="wrapper">
			<div class="footer_area">
			<div class="copy_right">&copy; Pharmacy BD | 2019 By Shifa</div>
			<div class="footer_menu">
				
				<a href=""><img src="images/facebook.png" alt="Facebook"></a>
				<!-- <a href=""><img src="images/linkdin.png" alt="Linkdin"></a>
				<a href=""><img src="images/google_plus.png" alt="Google+"></a>
				<a href=""><img src="images/intragrm.png" alt="Intragram"></a>
				<a href=""><img src="images/twitter.png" alt="Twitter"></a>
				<a href=""><img src="images/youtube.png" alt="Youtube"></a> -->

			</div>
		</div>
		</div>
	</footer>


	<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>

	<!-- Owl carousel js -->

	<script src="js/owl.carousel.min.js"></script>

          
	<script type="text/javascript">
    $(document).ready(function(){

    	$('#slider').slick({
		autoplay:true,
		prevArrow:'<button type="button" class="slick-prev">Previous</button>',
		nextArrow:'<button type="button" class="slick-next">Next</button>'
    
  		});
      
    });

      $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 3,
                nav: true,
                loop: true,
                //navText:['Prev','Next'],
                navText:['<<','>>'],
                autoplay:true,
                autoplayTimeout:5000
        		
              });
            });
	
  </script>

  <script src="js/mixitup.min.js"></script>
<script>
            var all_medicine = document.querySelector('.all_medicine');

            var mixer = mixitup(all_medicine);
        </script>

<script>
            var containerEl = document.querySelector('.all_item');

            var mixer = mixitup(containerEl);
        </script>
</body>
</html>