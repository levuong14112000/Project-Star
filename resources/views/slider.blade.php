
<style>
    /* Make it a marquee */
    .marquee {
        margin: 0 auto;
        white-space: nowrap;
        overflow: hidden;
    }

    .marquee {
        display: table;
        /*padding-left: 100%;*/
        animation: marquee 7s linear infinite;
    }
    /* Make it move */
    @keyframes marquee {
        0%   { transform: translate(0, 0); }
        100% { transform: translate(-100%, 0); }
    }
    .marquee1 {
        margin: 0 auto;
        white-space: nowrap;
        overflow: hidden;
    }

    .marquee1 {
        display: table;
        /*padding-left: 100%;*/
        /*animation: marquee 7s linear infinite;*/
    }
    /* Make it move */
    @keyframes marquee1 {
        0%   { transform: translate(0, 0); }
        100% { transform: translate(-100%, 0); }
    }
</style>
<div style="display: inline">
    <p id="toado" class="marquee1"></p>
    <p class="marquee"></p>
</div>

<script>if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Lấy địa chỉ từ tọa độ
            fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${longitude},${latitude}.json?access_token=YOUR_ACCESS_TOKEN`)
                .then(response => response.json())
                .then(data => {
                    var address = data.features[0].place_name;
                    console.log(`Địa chỉ của bạn là: ${address}`);

                    // Lấy thời gian hiện tại
                    var now = new Date();
                    var hours = now.getHours();
                    var minutes = now.getMinutes();
                    var seconds = now.getSeconds();
                    console.log(`Thời gian hiện tại là ${hours}:${minutes}:${seconds}`);
                })
                .catch(error => console.log(error));
        });
    } else {
        console.log("Trình duyệt của bạn không hỗ trợ API Geolocation");
    }
    var now = dayjs();
    var formattedTime = now.format('HH:mm:ss');
    console.log(`Thời gian hiện tại là: ${formattedTime}`);
</script>


<p id="hvn"></p>
