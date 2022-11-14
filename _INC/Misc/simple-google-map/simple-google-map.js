//console.log(simple_google_map_data);
// Initialize and add the map

function initMap(mapData) {
    // The location of my marker
    const myMarker = { lat: parseFloat(simple_google_map_data.marker.lat), lng: parseFloat(simple_google_map_data.marker.lng) };
    // The map, centered at my marker
    const map = new google.maps.Map(document.getElementById(simple_google_map_data.id), {
      zoom: parseFloat(simple_google_map_data.marker.zoom),
      center: myMarker,
    });
    // The marker, positioned at my marker
    const marker = new google.maps.Marker({
      position: myMarker,
      map: map,
    });
  }
  
  window.initMap = initMap;
