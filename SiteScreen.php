<?php
 
class SiteScreen{

    public $url;
    public $timeout;
    public $sizes;
    public $size;
    public $imageDestination;
    public $imageName; 

   /**
    * Construct.
    * 
    * @param string $destinationPath  destination of the site screenshot
    * 
    */

    public function  __construct( string $destinationPath )
    { 
        $this->destinationPath = $destinationPath;
        $this->sizes = 
            array(
                '360x2000'=>"360,2000",
                '768x2000'=>"768,2000",
                '1800x1400'=>"1800,1400"
            );
    } 


    /**
     * shot process a screenshot at a predefined size (see $sizes).
     * 
     * @param string $url url to capture (screenshot).
     * @param string $size predefined size from array sizes.
     * @param int $timeout for stop the process after x sec. 
     * 
     */

    public function shot( string $url, string $size, int $timeout )
    {
        $this->url = $url;
        $this->size = $size;
        $this->timeout = $timeout;
        $this->imageName = md5($url) . '-' .( $this->size ).'.png';
        $this->imageDestination = $this->destinationPath . '/' . $this->imageName;
        $this->command();
    }
 

    /**
     * command() | generate the shell command and execute it.
     * 
     */

    public function command()
    {
        // local -> delete chromium-browser for your local browser chrome, ...
        $cmd = 'timeout=' . $this->timeout . ' chromium-browser --headless --disable-gpu --hide-scrollbars --window-size=';
        $cmd .= $this->sizes[$this->size].' --screenshot=' . $this->imageDestination . ' ' . $this->url . ' &';
        exec( $cmd,$output ); 
    } 

}