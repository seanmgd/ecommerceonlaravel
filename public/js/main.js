window.onload = () => {
  if (window.location.search) {
    if (window.location.search === "?success=true") {
      document.getElementsByClassName("alert-success")[0].style.display = "block"
    } else {
      document.getElementsByClassName("alert-danger")[0].style.display = "block"
    }
  }

  document.getElementsByClassName("loading")[0].style.display = "none";

  let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
  bannerNode.parentNode.removeChild(bannerNode);
}
//Delete banner after 1sec while body is onload
setTimeout(function(){
  let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
  bannerNode.parentNode.removeChild(bannerNode);
}, 1000);
