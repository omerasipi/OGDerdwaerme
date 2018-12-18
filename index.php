<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erderwärmung TG</title>
    <!--Links-->
    <link rel="icon" href="img/favicon.ico" type="img/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <!--Scripts-->
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.2.0/build/ol.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>
</head>
<body>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <h2>Erderwärmung im Kanton Thurgau</h2>
            </div>
            <div class="col-sm">
                    <select id="liste" class="form-control col-sm" onchange="dataList()">
                        <option>Gefahrenhinweise</option>
                        <option>Erdwärmesondenbohrungen</option>
                        <option>Verbotszonen</option>
                    </select>
            </div>
        </div>
    </div>
</header>

<div class="">
    <div id="map" class="map"></div>
</div>



<div class="text">
    <h2 style="font-size: 3em; font-weight: bold;">Über die Web-App</h2>
    <p style="font-size: 1.6em; margin-top:0.5em;">Diese Webseite zeigt Daten über Erdwärme im Kanton Thurgau an. Sie zeigt die Zulässigkeit zur Energiegewinnung mit Erdwärmesonden. <br/>
        Es wird gezeigt, wo dass es gefährlich sein könnte um Erdwärmesonden zu legen (Gefahrenbereich), wo es Verboten ist Erdwärmesonden zu bohren (Verbotszonen)
        und wo es bereits Erderwärmesondenbohrungen gibt (Erderwärmesondenbohrungen ).  <br/>
        Die Daten stammen von <a href="https://opendata.swiss/de/dataset/erdwarme-wms-dienst">opendata.swiss</a>. </p>
</div>




<footer class="boxi">
    <h5>OGD 2018 ©</h5>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>