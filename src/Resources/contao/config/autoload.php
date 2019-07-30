<?php

ClassLoader::addNamespaces(array
(
    'SKowalsky',
));

ClassLoader::addClasses(array(
   '\Isotope\CheckoutStep\Address' => 'vendor/skowalsky/cw_customs/src/Resources/contao/classes/Address.php',
   '\Isotope\CheckoutStep\OrderConditions' => 'vendor/skowalsky/cw_customs/src/Resources/contao/classes/OrderConditions.php'
));