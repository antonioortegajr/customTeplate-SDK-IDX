<?php $loader = new Twig_Loader_Array(array('a' => $localTemplate));
$twig = new Twig_Environment($loader);
//decalre what template to load
//decalre what template to load
$load_template = 'a';
//load a template with variables
echo $twig->render($load_template,
              array(
                  'address' => $address,
                  'streetNumber'=> $streetNumber,
                  'streetDirection' => $streetDirection,
                  'streetName' => $streetName,
                  'unitNumber' => $unitNumber,
                  'cityName' => $cityName,
                  'stateAbrv' => $stateAbrv,
                  'state' => $state,
                  'zipcode' => $zipcode,
                  'propStatus' => $propStatus,
                  'priceLabel' => $priceLabel,
                  'priceDisplay' => $priceDisplay,
                  'moreInfoLink' => $moreInfoLink,
                  'scheduleShowingLink' => $scheduleShowingLink
                      )); ?>
