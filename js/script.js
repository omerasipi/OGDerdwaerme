var map = L.map("map",{
    center: [47.574015,9.106968],
    zoom: 11,
    dragging: false,
    scrollWheelZoom: false
});



var wmsLayer = L.tileLayer.wms('https://demo.boundlessgeo.com/geoserver/ows?', {
    layers: 'ne:ne'
}).addTo(map);

var ogdLayer = L.tileLayer.wms('https://map.geo.tg.ch/proxy/geofy_chsdi3/erdwaerme_erdwaermesonden?access_key=YoW2syIQ4xe0ccJA&', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'Gefahrenhinweise',
    crs: L.CRS.EPSG4326
}).addTo(map);

function dataList() {
    var wert = document.getElementById('liste').value;

    switch(wert) {
        case 'Gefahrenhinweise':
            changeLayer(layers.Gefahrenhinweise);
            break;
        case 'Erdwärmesondenbohrungen':
            changeLayer(layers.Erdwaermesonden);
            break;
        case 'Verbotszonen':
            changeLayer(layers.verboten);
            break;
    }
}

function changeLayer(layer) {
    ogdLayer.remove();
    layers.Gefahrenhinweise.remove();
    layers.Erdwaermesonden.remove();
    layers.verboten.remove();
    layer.addTo(map);
}


var layers = {
    'Gefahrenhinweise': L.tileLayer.wms('https://map.geo.tg.ch/proxy/geofy_chsdi3/erdwaerme_erdwaermesonden?access_key=YoW2syIQ4xe0ccJA&', {
        version: '1.3.0',
        transparent: true,
        format: 'image/png',
        layers: 'Gefahrenhinweise',
        crs: L.CRS.EPSG4326
    }),
    'Erdwaermesonden': L.tileLayer.wms('https://map.geo.tg.ch/proxy/geofy_chsdi3/erdwaerme_erdwaermesonden?access_key=YoW2syIQ4xe0ccJA&', {
        version: '1.3.0',
        transparent: true,
        format: 'image/png',
        layers: 'Erdwaermesonden',
        crs: L.CRS.EPSG4326
    }),
    'verboten': L.tileLayer.wms('https://map.geo.tg.ch/proxy/geofy_chsdi3/erdwaerme_erdwaermesonden?access_key=YoW2syIQ4xe0ccJA&', {
        version: '1.3.0',
        transparent: true,
        format: 'image/png',
        layers: 'verboten',
        crs: L.CRS.EPSG4326
    }),
};