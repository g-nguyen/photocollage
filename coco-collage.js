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
	$('.x').click(function(event) {
	    if (!$(event.target).is('.collage')) {
		    $(this).find(".collage").trigger('click');
		}
	});
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
    $('#d').click(function(event) {
        if (!$(event.target).is('#img4')) {
            $(this).find("#img4").trigger('click');
        }
    });
    $('#e').click(function(event) {
        if (!$(event.target).is('#img5')) {
            $(this).find("#img5").trigger('click');
        }
    });

	$(":file").change(function() {
  		readURL(this);
  		$(this).next().css('display', 'block');
	});

    var element = $("#img"); // global variable
    var getCanvas; // global variable

    $("#btn-Preview-Image").on('click', function () {
        $('.collage').remove();
        html2canvas(element, {
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
            }
        });
    });

});