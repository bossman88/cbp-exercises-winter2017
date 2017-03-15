<?php
$formatter = new IntlDateFormatter(	
    'cs_CZ',	
    IntlDateFormatter::FULL,
    	IntlDateFormatter::MEDIUM);
$formatter = new IntlDateFormatter(	
    'cs_CZ',
    	IntlDateFormatter::FULL,	
IntlDateFormatter::MEDIUM);


echo 'The future ' . $formatter->format(time('+1 month +1 week'));
