function iniciarMapa(){
  var cordenadas = {lat:-34.634823, lng:-58.360342};
  var mapa = new google.maps.Map(document.querySelector("#mapa"),{zoom : 15, center : cordenadas});
  var marker = new google.maps.Marker({position : cordenadas, map : mapa});  
};