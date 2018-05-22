<?php
namespace Kit\XunsearchBundle\Service;

class XunsearchService
{
    public function __construct($iniPath)
    {
        define ('XS_APP_ROOT', $iniPath);
    }
    /**
     * 
     * @return \XS
     */
    protected function getXS($file)
    {
        return new \XS($file);
    }
    
}