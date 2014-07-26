function initialize() {
        var latitude=document.getElementById("latitude").value;
		var longtitude=document.getElementById("longtitude").value;
		var myLatlng = new google.maps.LatLng(latitude,longtitude);
            var mapOptions = {
                zoom: 13,
                center: myLatlng
            };
 
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
 
            var contentString = "<table><tr><th>Công ty đầu tư xây dựng Trung Trung Bộ</th></tr><tr><td>Địa chỉ: 175 Trần Quý Cáp - Tp.Tam Kỳ - Quảng Nam</td></tr></table>";
 
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
 
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Công ty đầu tư xây dựng Trung Trung Bộ'
            });
            google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
        });
		$(".Choicefile").unbind();
        }
 
        google.maps.event.addDomListener(window, 'load', initialize);