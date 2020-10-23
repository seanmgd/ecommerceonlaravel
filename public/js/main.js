window.onload = () => {

  document.getElementsByClassName("loading")[0].style.display = "none";

  let bannerNode = document.querySelector('[alt="www.000webhost.com"]');
    if (bannerNode) {
        bannerNode.parentNode.parentNode.parentNode.removeChild(bannerNode);
    }
}

//Delete banner after 1sec while body is onload
setTimeout(function(){
  let bannerNode = document.querySelector('[alt="www.000webhost.com"]');
  if (bannerNode) {
      bannerNode.parentNode.parentNode.parentNode.removeChild(bannerNode);
  }
}, 1000);

//Delete success message
let alertSuccess = document.getElementsByClassName("alert")[0];
if (alertSuccess !== undefined) {
    alertSuccess.style.opacity = 1;
    (function fade(){(alertSuccess.style.opacity-=.05) <0 ? alertSuccess.style.display="none" : setTimeout(fade,100)})();
}

//Add input hidden for size on click
const sizeButton = document.getElementsByClassName("swatch-anchor");
for(const key in sizeButton){
    sizeButton[key].onclick = function () {
        if (document.getElementsByClassName("selected").length !== 0) {
            document.getElementsByClassName("selected")[0].classList.remove("selected");
        }
        const alertBlock = document.getElementById("error")
        if (alertBlock) {
            alertBlock.className += " hidden"
        }
        setTimeout(function(){
            sizeButton[key].parentNode.className += " selected";
        }, 10)
        let sizeInput = document.createElement("input");
        sizeInput.type = "hidden";sizeInput.value = sizeButton[key].id;sizeInput.name = "size";
        const form = document.getElementsByClassName("cart")[0]
        form.appendChild(sizeInput);
    }
}

//Show error if input size is not set
    document.getElementsByName("size")

//Checkout animation
//Does fluid credit card number input
$('.input-card-number').on('keyup change', function() {
    t = $(this);

    //focuses next input when the fourth number is put in
    if (t.val().length > 3) {
        t.next().focus();
    }
});

var $animation_elements = $('.animation-element');
var $window = $(window);

//On scroll into view animatior
//Used to drop credit card on receipt
function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
        } else {
            $element.removeClass('in-view');
        }
    });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
