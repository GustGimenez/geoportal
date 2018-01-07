
<div id="map"></div>
<script>
	function initMap(){
    		// Variável mapa
    		var map = new google.maps.Map(document.getElementById('map'), {
    			zoom: 6,
    			center: {lat: -22.1276, lng: -51.3856}
    		});


        var results =  JSON.parse('<?= json_encode($marcacoes) ?>');
          for (var i = 0; i < results.valores.length; i++) {

            var latLng = new google.maps.LatLng(results.valores[i].lat, results.valores[i].long);
            placeMarker(map,latLng,results,i);
        }

        function placeMarker(map, location, results, i) {
            var marker = new google.maps.Marker({
              position: location,
              map: map
          });

            var conteudo = '';
            for(var cont = 0; cont < results.atributos.length; cont++){
                conteudo += results.atributos[cont].atri_nome + ": " + 
                            results.valores[i][results.atributos[cont].atri_nome] + "<br>";
            }

            var infowindow = new google.maps.InfoWindow({
              content: conteudo
          });


            google.maps.event.addListener(marker, "click", function(event) {
              infowindow.open(map,marker);
          });

        }
    }
</script>
