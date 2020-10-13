window.onload = () => {

  document.getElementsByClassName("loading")[0].style.display = "none";

  let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
  bannerNode.parentNode.removeChild(bannerNode);
}
//Delete banner after 1sec while body is onload
setTimeout(function(){
  let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
  bannerNode.parentNode.removeChild(bannerNode);
}, 1000);
//Delete success message
let alertSuccess = document.getElementsByClassName("alert")[0];
if (alertSuccess !== undefined) {
    alertSuccess.style.opacity = 1;
    (function fade(){(alertSuccess.style.opacity-=.05) <0 ? alertSuccess.style.display="none" : setTimeout(fade,100)})();
}
