resizeMap=function(width){
  if (width <= 991) { //using the equiv. of bootstrap medium width. Should be invoked for phones and tablets
    $("#googleMapImage").attr("src", "http://maps.googleapis.com/maps/api/staticmap?size=360x240&scale=2&zoom=13&markers=icon:&markers=icon:http://chart.apis.google.com/chart?chst=d_map_pin_icon%26chld=medical%257CFD7B70%7C475%20N%20Farnsworth%20Ave,%20Aurora,%20IL")
  } else {
    $("#googleMapImage").attr("src", "http://maps.googleapis.com/maps/api/staticmap?size=540x360&scale=2&zoom=13&markers=icon:&markers=icon:http://chart.apis.google.com/chart?chst=d_map_pin_icon%26chld=medical%257CFD7B70%7C475%20N%20Farnsworth%20Ave,%20Aurora,%20IL")
  }
  return true    
}

window.onload=function(){
    var width = window.innerWidth;
    resizeMap(width)
};

window.onresize=function(){
    var width = window.innerWidth;
    resizeMap(width)
}

$(document).ready(function() {
     $('.carousel').carousel({
         interval: 5000
     })
});    
