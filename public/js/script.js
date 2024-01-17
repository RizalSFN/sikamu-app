document.addEventListener("DOMContentLoaded", function () {
    let mymap = L.map("map").setView(
        [-7.008185256965672, 107.5475492369882],
        13
    );

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "SiKaMU - App",
    }).addTo(mymap);

    let marker = L.marker([-7.009025256975672, 107.5475492369882]).addTo(mymap);
    marker.bindPopup("Lokasimu terkini").openPopup();
});
