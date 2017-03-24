<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class PrintrTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'Printr';
    }

    public function getFilters()
    {
        return array(
            'printr' => new Twig_Filter_Method($this, 'printr'),
        );
    }

    // pass a parameter, array or object to print_r
    public function printr($param)
    {
        echo '<pre class="printr">';
        print_r($param);
        //print_r(array_chunk($param, 2));
        echo  '</pre>';
        //return ini_get($param);
    }


}
