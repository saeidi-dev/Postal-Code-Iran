# Iran Postal Code to State converter
==============================

This is a simple class to convert from a iran postal code to a iran state.

Usage 
-----

```php
<?php

// Returns 'قم'
$state = \IranZip\PostalCode::toState('37179');

// Returns 'زنجان'
$state = \IranZip\PostalCode::toState('45131');

// Returns array 'state' => 'قزوین', 'city' => 'آبيك'
$state = \IranZip\PostalCode::toState('34411');

```
