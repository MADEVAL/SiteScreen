# SiteScreen

A php class to help you making sites screenshot easy

## prerequisites :

* Chrome or chromium headless browser need to be installed first.
* Create an img path at the same level with read and write permissions.

## Usage / example
 
        require('SiteScreen.php');
        $time_beg = microtime(true);
        $shot = new SiteScreen('img');

        //First screenshot at 360x2000 pixels

        $shot->shot( 'https://www.easy-thumb.net/fr/index.html','360x2000',3 );
        if( file_exists( './' . $shot->imageDestination ) ){  
            echo 'File saved in 360x2000 pixels and 72 dpi<br>' . "\n";
        }

        //Second screenshot at 768x2000 pixels

        $shot->shot( 'https://www.easy-thumb.net/fr/index.html','768x2000',3 );
        if( file_exists( './' . $shot->imageDestination ) ){
            echo 'File saved in 768x2000 pixels and 72 dpi<br>' . "\n";
        }

        //Third screenshot at 1800x1400 pixels

        $shot->shot( 'https://www.easy-thumb.net/fr/index.html','1800x1400',3 );
        if( file_exists( './' . $shot->imageDestination ) ){
            echo 'File saved in 1800x1400 pixels and 72 dpi<br>' . "\n";
        }

        $time_end = microtime(true);
        $scripTimeDuration = round($time_end - $time_beg); 
        echo $scripTimeDuration . '<br>' . "\n";

## Toto list

* todo default size if != in_array sizes ...
