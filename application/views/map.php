
<div id="map"></div>
<script>
	function initMap(){
    		// Variável mapa
    		var map = new google.maps.Map(document.getElementById('map'), {
    			zoom: 6,
    			center: {lat: -22.1276, lng: -51.3856}
    		});

            
    }

    $("#ver").click(function(){
        var endereco = $("#f_endereco").val() + $("#f_cidade").val();
        alert(endereco);
        codeAddress(endereco);
    });

    function codeAddress(endereco) {
        geocoder.geocode( { 'address': endereco}, function(results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                createMarker(results[0].geometry.location);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

// Função que cria o marcador
function createMarker(latLng) {
    if (marker) {
        marker.setMap(null);
        marker = "";
    }

    marker = new google.maps.Marker({
        position: latLng,
        draggable: true,
        map: map
    });
    google.maps.event.addListener(marker, 'dragend', function() {
        marker.position = marker.getPosition();
        var lat = marker.position.lat().toFixed(6);
        var lng = marker.position.lng().toFixed(6);
        getCoords(lat, lng);
    });
}

// Função que atualiza as caixas de texto no topo da página
function getCoords(lat, lng) {
    $("#latitude").val(lat);
    $("#longitude").val(lng);
}
</script>
