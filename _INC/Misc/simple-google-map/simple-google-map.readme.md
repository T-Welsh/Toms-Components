# Girder Navbar Component
A simple map component built using google maps. The map view will default to be centered on the marker at the provided lattitude, longitude, and zoom level.

ONLY HAVE ONE INSTANCE PER PAGE

## Overview
- z-index group: 

## Data
Takes in data in the following format...

```
$simple_google_map_data = (object)[
    'id' => 'simple-google-map-1',
    'marker' => (object)[
        'lat' => '52.230701',
        'lng' => '0.862048',
        'zoom' => '11'
    ]
];
```

## CMS Controlls
### Processwire

## Todo
* [ ] add support for multiple markers
* [ ] add support for multiple instances per page