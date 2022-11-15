<script>
    var simple_google_map_data = <?php echo json_encode($simple_google_map_data, JSON_HEX_TAG); ?>; // Don't forget the extra semicolon!
</script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $simple_google_map_data->style ;?>" />
<script type="module" src="<?php echo $simple_google_map_data->script ;?>"></script>

<!--The div element for the map -->
<section class="simple-google-map" id="<?php echo $simple_google_map_data->id ;?>"></section>

<!-- 
    The `defer` attribute causes the callback to execute after the full HTML
    document has been parsed. For non-blocking uses, avoiding race conditions,
    and consistent behavior across browsers, consider loading using Promises
    with https://www.npmjs.com/package/@googlemaps/js-api-loader.
-->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYS3Ff0draFN2hPJOSd7kGvqKnZnGAT2I&callback=initMap&v=weekly"
    defer
></script>
