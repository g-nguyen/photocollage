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
                canvas.id = "can";
                $("#previewImage").append(canvas);
                getCanvas = canvas;
                var image = new Image();
                image.src = document.getElementById('can').toDataURL();
                $('body').append(image);
                canvas.setAttribute("style","display: none");
            }
        });
        
    });
});