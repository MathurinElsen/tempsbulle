function init(){
    console.log('bite');
    const parc = {
        lat: 48, 
        lng: 2
    }
    
    const zoomLevel = 5;
    const map = L.map('geoportail').setView([parc.lat, parc.lng], zoomLevel);
    const mainLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -2,
        accessToken: 'pk.eyJ1IjoibWF0aHVyaW5lbHNlbiIsImEiOiJjbDB2MGd4NXcwMGE2M2JtaWh6Z212eGVzIn0.hz_nhguQkiWS_TGndEH5-Q'
    }).addTo(map);
    
    
    // var marker = L.marker([48.85700473106595, 2.348062379587022]).addTo(map);
    // L.marker([44.83517331506504, 5.717161439372141]).addTo(map).bindPopup("<a  href='#' target='_blank' list-style: none ; title='Local de conception'>Local de conception</a>");;
    
    // fetch('test.php').then( function(resultatend){
    //     return resultatend.json();
    //     }).then(resultatendjson =>{
    //         resultatendjson.forEach(elt=> {
    //             var lat = elt.latitude ; 
    //             var lon = elt.longitude ; 
    //             var name =elt.name;
    //             var img = elt.img;
    //             var descri =elt.description;
    //             var cap = elt.capacite;
    //             if (lat) {var marker = L.marker([lat,lon]).addTo(map).bindPopup('Nom : '+name+".<br> Catégorie : "+descri+".<br> Capacité "+cap+".")
    //             }
    //         ;})
    //     ;})
    }