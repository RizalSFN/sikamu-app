document.addEventListener("DOMContentLoaded", function () {
    let mymap = L.map("map").setView(
        [-7.008185256965672, 107.5475492369882],
        13
    );

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }

    function showPosition(position) {
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "SiKaMU - App",
        }).addTo(mymap);

        let marker = L.marker([
            position.coords.latitude,
            position.coords.longitude,
        ]).addTo(mymap);
        marker.bindPopup("Lokasimu terkini").openPopup();

        let popup = L.popup();
        function onMapClick(e) {
            let newLatLng = e.latlng.toString();
            let splits = newLatLng.split("(");
            let split2 = splits[1].split(")");
            let hasil = split2[0].split(", ");
            let newLat = hasil[0];
            let newLng = hasil[1];
            popup
                .setLatLng(e.latlng)
                .setContent(
                    "hello, you clicked at : Latitude : " +
                        newLat +
                        " Longitude : " +
                        newLng
                )
                .openOn(mymap);
        }
        mymap.on("click", onMapClick);

        // let circle = L.circle(
        //     [position.coords.latitude, position.coords.longitude],
        //     {
        //         color: "cyan",
        //         fillColor: "#46b2fa",
        //         fillOpacity: 0.5,
        //         radius: 1000,
        //     }
        // ).addTo(mymap);

        // let circleDanger = L.circle([-6.960596, 107.567781], {
        //     color: "red",
        //     fillColor: "#f03",
        //     fillOpacity: 0.5,
        //     radius: 100,
        // })
        //     .addTo(mymap)
        //     .bindPopup("Area Kejadian")
        //     .openPopup();
    }
});
