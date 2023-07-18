<!DOCTYPE html>
@include('layouts.meta_head')
@php
if(isset($title)) {
    $title .= '｜';
} else {
    $title = '';
}
$title .= config('livit.site_name');
@endphp
<title>{{ $title }}</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:url" content="">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/detail/leaflet.css">
<!-- [end]css -->
</head>
<body>

<div id="map"></div>
<script src="/serviceinfo/assets/js/common/jquery.js"></script>
<script src="/serviceinfo/assets/js/common/leaflet.js"></script>
<script>
  var map = L.map('map', {
      maxZoom: 0,
      minZoom: -3,
      crs: L.CRS.Simple
  }).setView([{{ $height }}, 0], -2);
  map.setMaxBounds(new L.LatLngBounds([0,{{ $width }}], [{{ $height }},0]));
  var imageUrl = '{{ $image_url }}';
  var imageBounds = [[{{ $height }}, 0], [0,{{ $width }}]];
  L.imageOverlay(imageUrl, imageBounds, {attribution:''}).addTo(map);
</script>
</body>
</html>
