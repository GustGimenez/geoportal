<form action="<?= base_url('usual/adicionar_marcacao') ?>" method="post">
	<div id="div_atributos">
		
	</div>
	<div>
		<input type="submit" name="" class="btn btn-primary">
	</div>

	<input type="hidden" name="lat" id="lat">
	<input type="hidden" name="long" id="long">
	<input type="hidden" name="colecao" id="colecao" value="0">
	<input type="hidden" name="num_atri" id="num_atri" value="0">
</form>
<input type="text" id="endereco" placeholder="Endereço">
<button id="ver">Buscar</button>
<div id="map"></div>
<style>
#map {
	width: 100%;
	height: 590px;
	background-color: grey;
}
</style>

<script>

$(document).ready(function(){
	var valores = JSON.parse('<?=json_encode($atributos)?>');
	var div_atributos = document.getElementById("div_atributos");
	var i;
	for(i = 0; i < valores.atributos.length; i++){
		var tipo;
		var type;
		switch (valores.atributos[i].atri_tipo) {
			case 0:
			tipo = 'INT';
			type = '"number"';
			break;

			case 1:
			tipo = 'VARCHAR[ ]';
			type = '"text"';
			break;

			case 2:
			tipo = 'BOOLEAN';
			type = '"text"';
			break;

			case 3:
			tipo = 'FLOAT';
			type = '"number"';
			break;

			case 4:
			tipo = 'BLOB';
			break;
		}

		$(div_atributos).append('<br><label>'+valores.atributos[i].atri_nome+'</label><br><input type='+type+' class="form-control" name='+valores.atributos[i].atri_nome+' />');
	}
	 document.getElementById("colecao").value = valores.colecao;
	 document.getElementById("num_atri").value = valores.atributos.length;
});
	
	var marker;
	function initMap() {
		var sp = {lat: -22.029374, lng: -48.212062};
		geocoder = new google.maps.Geocoder();
		var mapOptions = {
			center: sp,
			zoom: 7,
		};
		map = new google.maps.Map(document.getElementById('map'), mapOptions);

		google.maps.event.addListener(map, "click", function(event) {
			var lat = event.latLng.lat().toFixed(6);
			var lng = event.latLng.lng().toFixed(6);
			var latLng = new google.maps.LatLng(lat,lng);
			createMarker(latLng);
			getCoords(lat, lng);

		});
	}

	$("#ver").click(function(){
		var endereco = $("#endereco").val();
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

	var lat = marker.position.lat().toFixed(6);
	var lng = marker.position.lng().toFixed(6);
	getCoords(lat, lng);

	google.maps.event.addListener(marker, 'dragend', function() {
		marker.position = marker.getPosition();
		var lat = marker.position.lat().toFixed(6);
		var lng = marker.position.lng().toFixed(6);
		getCoords(lat, lng);
	});
}

// Função que actualiza as caixas de texto no topo da página
function getCoords(lat, lng) {
	$("#lat").val(lat);
	$("#long").val(lng);
}


</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCICU1zIV5CiGivUz3fkzxGUuK6W-2G04c&callback=initMap">


</script>