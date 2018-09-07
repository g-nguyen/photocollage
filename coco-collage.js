$(document).ready(function(){
	$(":file").css("opacity", 0);
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

		   	reader.onload = function(e) {
		   		input.nextElementSibling.setAttribute("src", e.target.result);
			}

		reader.readAsDataURL(input.files[0]);
		}
	}
	$('#a').click(function(event) {
	    if (!$(event.target).is('#img1')) {
		    $(this).find("#img1").trigger('click');
		}
	});
	$('#b').click(function(event) {
	    if (!$(event.target).is('#img2')) {
	        $(this).find("#img2").trigger('click');
	    }
	});
	$('#c').click(function(event) {
	    if (!$(event.target).is('#img3')) {
		    $(this).find("#img3").trigger('click');
	   }
	});
	$(":file").change(function() {
  		readURL(this);
  		$(this).next().css('display', 'block');
	});
});