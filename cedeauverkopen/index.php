<!doctype html><html lang="en">
<head><title>Cedeauverkopen.nl voor inkoop, verkoop en ruilen van kadobonnen, ook als die verlopen zijn. VVV bonnen / Irischeque, ANWB Cadeaucard / ANWB kadobon, Nationale Slijtersbon, Nationale Dinercheque, Podium Cadeaukaart, Nationale Bioscoopbon, Nationale Theater en Concertbon, Globe reisburo vakantie Cadeaubon, OAD reischeque, Nationale Boekenbon en ook Albert Heijn koopzegels van € 0,10.</title><meta name="Description" content="Cedeauverkopen.nl voor inkoop, verkoop en ruilen van kadobonnen, ook als die verlopen zijn, zoals VVV bonnen / Irischeque, ANWB Cadeaucard / ANWB kadobon, Nationale Slijtersbon, Nationale Dinercheque, Podium Cadeaukaart, Nationale Bioscoopbon, Nationale Theater en Concertbon, Globe reisburo vakantie Cadeaubon, OAD reischeque, Nationale Boekenbon en ook Albert Heijn koopzegels van € 0,10."><link rel="Icon" href="favicon.ico" type="image/x-icon"><script async src="https://www.googletagmanager.com/gtag/js?id=UA-141745919-1"></script><script>if (location.protocol != 'https:'){location.href = 'https:' + window.location.href.substring(window.location.protocol.length);}window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-141745919-1');</script><style type="text/css">body,html{margin:0;padding:0;height:100%;overflow:hidden}#a{width=100%;height=100%;border=none}</style></head><body><iframe id="a" width="100%" height="100%" src="//filasoft.nl/kadobonnenplaza/kadobonnen-inkoop-formulier.php"></iframe>
  <?php
  function getLocationInfoByIp(){
      $client  = @$_SERVER['HTTP_CLIENT_IP'];
      $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
      $remote  = @$_SERVER['REMOTE_ADDR'];
      $result  = array('country'=>'', 'city'=>'');
      if(filter_var($client, FILTER_VALIDATE_IP)){
          $ip = $client;
      }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
          $ip = $forward;
      }else{
          $ip = $remote;
      }
      $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
      if($ip_data && $ip_data->geoplugin_countryName != null){
          $result['country'] = $ip_data->geoplugin_countryCode;
          $result['city'] = $ip_data->geoplugin_city;
      }
      return $result;
  } ?></body></html>
