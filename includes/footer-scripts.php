<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.animatedscroll-1.1.5.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		
		/***** STICKY *******/
		$(window).scrollTop(0);
		$(window).scroll(function(){
			if ($(this).scrollTop() > 180) {
    			$('.navarea').addClass('sticky');
    		}
			else
				{$('.navarea').removeClass('sticky'); }
		});
		/***** END STICKY *******/
		
		
		/***** SEARCH *****/
		$('.search').click(function(){
			$('.search-section').show();
			$('.close').click(function(){
				$('.search-section').hide();
			});
		});
		
		/***** END SEARCH *****/


		/***** BURGER *****/
		$('.burger').click(function(){
			$('.middle-nav ul, .middle-nav .close').show();

			$('.close').click(function(){
				$('.middle-nav ul, .middle-nav .close').hide();
			
			});
		});

		/***** END BURGER *****/


		/***** FAQs *****/
		$('.q').click(function(){
			
			$(this).next().slideToggle(function(){
				$(this).parent().toggleClass('light-gray');
			});
		});

		/***** END FAQs *****/

		/***** Scroll Tos *****/
		$("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});

		/***** END Scroll Tos *****/

		
	})
</script>