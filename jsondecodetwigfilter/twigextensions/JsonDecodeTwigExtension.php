<?php
namespace Craft;

use Twig_Extension;  
use Twig_Filter_Method;

class JsonDecodeTwigExtension extends \Twig_Extension {
	
	public function getName() {

        return 'Json Decode';
    }

    public function getFilters() {

        $returnArray = array();
        $methods = array(
            'json_decode',
        );

        foreach ($methods as $methodName) {
            $returnArray[$methodName] = new \Twig_Filter_Method($this, $methodName);
        }

        return $returnArray;
    }

    public function json_decode($json, $assoc=false) {

        return json_decode($json, $assoc);
    }
}
