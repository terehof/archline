<?php
/*
Template Name: contacts
*/
?>
<? get_header(); ?>

<div class="wrapper">
    <header class="contacts-header" id="top">
        <div class="row">
            <div class="col-md-6">
                <div class="page-name">
                    Контакты
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <ul class="theses">
                        <li class="theses-li">
                            <h4>рабочие часы</h4>
                        </li>
                        <li>
                            пн-пт: 9:00 - 18:00
                        </li>
                        <li>
                            сб: 9:00 - 15:00
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li class="theses-li">
                            <h4>контакты</h4>
                        </li>
                        <li>
                            +7 000 000 0000
                        </li>
                        <li>
                            arcline@info.com
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li class="theses-li">
                            <h4>
                                Aдрес
                            </h4>
                        </li>
                        <li>
                            119270, Россия, Москва,
                        </li>
                        <li>
                            Улица 00, офис 00
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </header>
    <div class="contacts">
        <div class="row">
            <div class="col-md-12">
                <div id="map_canvas"></div>
            </div>
        </div>
    </div>
    <footer class="clearfix">
        <div class="text-left col-sm-6 col-md-6">
            © 2016 ArchLine.Все права защищены.
        </div>
        <div class="text-right col-sm-6 col-md-6">
            +7 000 000 0000 / archline@info.com
        </div>
    </footer>
</div>
<script>
    /*карта для страницы contacts*/
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map_canvas'), {
            center: {lat: 46.474723, lng: 30.731276},
            scrollwheel: false,
            zoom: 15
        });
        var image = '<? bloginfo('template_url'); ?>/images/map-indicate.png';
        var beachMarker = new google.maps.Marker({
            position: {lat: 46.474723, lng: 30.731276},
            map: map,
            icon: image
        });

        var styleArray = [
            {
                featureType: "all",
                stylers: [
                    { saturation: -80 }
                ]
            },{
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    { hue: "#282828" },
                    { saturation: 30 },
                    { color: '#282828'}
                ]
            },{
                featureType: "poi.business",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            },{
                featureType: 'landscape.man_made',
                stylers: [
                    {color: "#333333"},
                    {saturation: -10}
                ]
            },{
                featureType: 'landscape.natural',
                stylers: [
                    {color: "#6f6a6a"}
                ]
            },{
                featureType: 'poi',
                stylers: [
                    {color: '#333333'}
                ]
            },{
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [
                    {color: '#A39F9B'}
                ]
            },{
                featureType: 'poi.place_of_worship',
                stylers: [
                    {color: '#333333'}
                ]
            },{
                featureType: 'poi.medical',
                stylers: [
                    {color: '#333333'}
                ]
            },{
                featureType: "road",
                elementType: "labels.text.fill",
                stylers: [
                    {color: '#A39F9B'}
                ]
            },{
                featureType: "road",
                elementType: "labels.text.stroke",
                stylers: [
                    {visibility: 'off'}
                ]
            },{
                featureType: "administrative.locality",
                elementType: "labels.text.stroke",
                stylers: [
                    {visibility: 'off'}
                ]
            },{
                featureType: "administrative.neighborhood",
                elementType: "labels.text.stroke",
                stylers: [
                    {visibility: 'off'}
                ]
            },{
                featureType: "transit",
                stylers: [
                    {visibility: 'off'}
                ]
            }
        ];
        map.setOptions({styles : styleArray});
    }
    /*END*/
</script>


<? get_footer(); ?>
