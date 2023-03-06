
<style>
    /* Make it a marquee */
    .marquee {
        margin: 0 auto;
        white-space: nowrap;
        overflow: hidden;
    }

    .marquee {
        display: inline-block;
        padding-left: 100%;
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
        display: inline-block;
        padding-left: 100%;
        animation: marquee 7s linear infinite;
    }
    /* Make it move */
    @keyframes marquee1 {
        0%   { transform: translate(0, 0); }
        100% { transform: translate(-100%, 0); }
    }
</style>
<div>
    <p id="toado" class="marquee1"></p>
    <p class="marquee"></p>
</div>

<script>
    function showcoor(pos) {
        var coord = pos.coords;
        var long = coord.longitude;
        var lat  = coord.latitude;
        var boxhtml = document.getElementById("toado");
        boxhtml.innerHTML = "Kinh độ: " + long + "<br>" + "Vĩ độ: " + lat;
    }
    var x = document.querySelector(".marquee");
    var today = new Date();
    var date = 'Ngày '+ today.getDate()+' Tháng '+(today.getMonth()+1)+' Năm '+today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' ---- '+time;
    document.querySelector(".marquee").innerHTML = dateTime;
    navigator.geolocation.getCurrentPosition(showcoor);
</script>
<p id="hvn"></p>
