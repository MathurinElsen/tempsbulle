// Utilisation de l'extension Géoportail pour Leaflet
// Création de la carte
var map  = L.map('geoportail', {
  center : L.latLng(46, 3),
  zoom : 7
});

// Création de la couche
var lyr =L.tileLayer('https://wxs.ign.fr/essentiels/geoportail/wmts?layer=GEOGRAPHICALGRIDSYSTEMS.PLANIGNV2&style=normal&tilematrixset=PM&Service=WMTS&Request=GetTile&Version=1.0.0&Format=image/png&TileMatrix={z}&TileCol={x}&TileRow={y}', {
attribution: 'Données cartographiques : © IGN',
maxNativeZoom:11,
maxZoom:10
}).addTo(map);

// Ajout de l'échelle cartographique
L.control.scale().addTo(map)

var marker = 
L.marker([44.83517331506504, 5.717161439372141]).addTo(map).bindPopup("<p title='Local de conception'>Local de conception</p>");;
L.marker([45.9014698899008, 6.127472863978498]).addTo(map).bindPopup("<p title='Local de conception'>Local de conception</p>");;
L.marker([41.4678762509121, 0.6875058675188981]).addTo(map).bindPopup("<p title='Huile d'Olive'>Huile d'Olive</p>");;
L.marker([51.26736452526381, 4.512940020077399]).addTo(map).bindPopup("<p title='Huile de Coco'>Huile de Coco</p>");;
L.marker([46.9435109528685, 1.2208161369457737]).addTo(map).bindPopup("<p title='Huile de Colza'>Huile de Colza</p>");;
L.marker([46.94351095286856, 1.2208161369457737]).addTo(map).bindPopup("<p title='Huile de Tournesol'>Huile de Tournesol</p>");;
L.marker([45.79885403715437,	5.881844005825131]).addTo(map).bindPopup("<p title='Huile de Cameline'>Huile de Cameline</p>");;
L.marker([45.9,	5.9]).addTo(map).bindPopup("<p title='Huile de chanvre'>Huile de chanvre</p>");;
L.marker([-11.39790165180557,	-74.49190188703818]).addTo(map).bindPopup("<p title='Beurre de caco'>Beurre de caco</p>");;
L.marker([9.684107384362909,	2.3008637295505]).addTo(map).bindPopup("<p title='Huile de Karité'>Huile de Karité</p>");;
L.marker([21.763729067986134,	79.18133982150545]).addTo(map).bindPopup("<p title='Huile de Ricin'>Huile de Ricin</p>");;
L.marker([45.82917466565619,	5.2818701865851985]).addTo(map).bindPopup("<p title='Soude'>Soude</p>");;
L.marker([46.01914715561103,	6.386030527814749]).addTo(map).bindPopup("<p title='Lait de chèvre'>Lait de chèvre</p>");;
L.marker([-13.163306123980666,	-74.22605381685257]).addTo(map).bindPopup("<p title='Café'>Café</p>");;
L.marker([46.096412594768346,	6.101783920811564]).addTo(map).bindPopup("<p title='Concombre'>Concombre</p>");;
L.marker([45.78563093710431,	5.9536453222721235]).addTo(map).bindPopup("<p title='Bière'>Bière</p>");;
L.marker([45.782635011277904,	5.988840236190207]).addTo(map).bindPopup("<p title='Spiruline'>Spiruline</p>");;
L.marker([44.83433811873584,	5.717280324518841]).addTo(map).bindPopup("<p title='Miel'>Miel</p>");
L.marker([46.17322955652934,	18.26444309372215]).addTo(map).bindPopup("<p title='Orcanette'>Orcanette</p>");;
L.marker([43.491976571546424,	5.372947043870501]).addTo(map).bindPopup("<p title='Argile rouge'>Argile rouge</p>");;
L.marker([42.54582753977322,	25.214975477845414]).addTo(map).bindPopup("<p title='Huile Essentielle de Lavande'>Huile Essentielle de Lavande</p>");;
L.marker([42.984434700133455,	12.45957323104748]).addTo(map).bindPopup("<p title='Huile Essentielle d'Orange Douce'>Huile Essentielle d'Orange Douce</p>");;
L.marker([34.87297541988213,	103.51048795073832]).addTo(map).bindPopup("<p title='Huile Essentielle d'Eucalyptus'>Huile Essentielle d'Eucalyptus</p>");;
L.marker([21.763729067986134,	79.18133982150545]).addTo(map).bindPopup("<p title='Huile Essentielle de Menthe'>Huile Essentielle de Menthe</p>");;
L.marker([40.43822274100138,	-3.838103490324415]).addTo(map).bindPopup("<p title='Huile Essentielle de Romarin'>Huile Essentielle de Romarin</p>");;
L.marker([-1.9507824394041804,	29.901029345042904]).addTo(map).bindPopup("<p title='Huile Essentielle de Patchouli'>Huile Essentielle de Patchouli</p>");;
L.marker([30.00841423530939, -8.809922652522786]).addTo(map).bindPopup("<p title='Huile Essentielle de Cèdre'>Huile Essentielle de Cèdre</p>");;