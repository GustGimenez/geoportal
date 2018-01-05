function initMap(){
    		// Variável mapa
    		var map = new google.maps.Map(document.getElementById('map'), {
    			zoom: 6,
    			center: {lat: -22.1276, lng: -51.3856}
    		});

            google.maps.event.addListener(map, "click", function(event) {
                var lat = event.latLng.lat().toFixed(6);
                var lng = event.latLng.lng().toFixed(6);
                var latLng = new google.maps.LatLng(lat,lng);
                createMarker(latLng);
                getCoords(lat, lng);

            });

    		// Função para adicionar marcadores
    		/*function addMarker(obj){
    			var marker = new google.maps.Marker({
    				position: obj.location
    			});

                marker.setMap(map);

    			if(obj.content){
    				var info = new google.maps.InfoWindow({
    					content: obj.content
    				});

    				marker.addListener('click',function(){
    					info.open(map, marker);
    				});
    			}
    		}

    		// Listener para criar marcadores onde clicar
    		google.maps.event.addListener(map, 'click', function(event){
        		addMarker({location:event.latLng, content:'Marcação Lecal'});

            });*/

    		// Testando a função addMarker
    		/*var aux = {
    			location: {lat: -30.0277, lng: -51.2287},
    			content: 'Porto Alegre'
    		};
    		
    		addMarker(aux);*/
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

// Função que actualiza as caixas de texto no topo da página
function getCoords(lat, lng) {
    $("#latitude").val(lat);
    $("#longitude").val(lng);
}