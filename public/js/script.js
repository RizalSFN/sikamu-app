document.addEventListener("DOMContentLoaded", function () {
    const koordinat = document.getElementById("koordinat").innerText;
    const koordinat_db = document.getElementById("koordinat-database").value;
    if (koordinat !== "") {
        const exKoor = koordinat.split(", ");
        const lat = exKoor[0];
        const long = exKoor[1];

        let mymap = L.map("map").setView([lat, long], 14);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "SiKaMU - App",
        }).addTo(mymap);

        let marker = L.marker([lat, long]).addTo(mymap);
        marker.bindPopup("Lokasimu").openPopup();
    } else if (koordinat_db !== "") {
        const exKoor = koordinat_db.split(", ");
        const lat = exKoor[0];
        const long = exKoor[1];

        let mymap = L.map("map").setView([lat, long], 14);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "SiKaMU - App",
        }).addTo(mymap);

        let marker = L.marker([lat, long]).addTo(mymap);
        marker.bindPopup("Lokasimu").openPopup();
    }

    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    }

    function showPosition(position) {
        let mymap = L.map("map").setView(
            [position.coords.latitude, position.coords.longitude],
            14
        );

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "SiKaMU - App",
        }).addTo(mymap);

        let marker = L.marker([
            position.coords.latitude,
            position.coords.longitude,
        ]).addTo(mymap);
        marker.bindPopup("Lokasimu").openPopup();

        let currentMarker;

        function onMapClick(e) {
            let newLatLng = e.latlng.toString();
            let splits = newLatLng.split("(");
            let split2 = splits[1].split(")");
            let hasil = split2[0].split(", ");
            let newLat = hasil[0];
            let newLng = hasil[1];

            if (currentMarker) {
                mymap.removeLayer(currentMarker);
            }

            currentMarker = L.marker(e.latlng).addTo(mymap);

            document.getElementById("koordinat").value = `${newLat}, ${newLng}`;
        }
        mymap.on("click", onMapClick);
    }
});
