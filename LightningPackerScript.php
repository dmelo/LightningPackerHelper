<?php

/**
 * Zend_View_Helper_LightningPackerScript
 *
 * @package LightningPacker
 * @version 1.0
 * @copyright Copyright (C) 2010 Diogo Oliveira de Melo. All rights reserved.
 * @author Diogo Oliveira de Melo <dmelo87@gmail.com>
 * @license GPL version 3
 */
class Zend_View_Helper_LightningPackerScript extends Zend_View_Helper_HeadScript
{
    /**
     * toString
     *
     * @param mixed $indent
     * @return void
     */
    public function toString($indent = null)
    {
        $this->getContainer()->ksort();
        $items = array();

        foreach($this as $item)
            $bag[] = $item->attributes['src'];

        return lightningPacker($bag, 'js');
    }


    /**
     *
     */
    public function lightningPackerScript(
        $mode = Zend_View_Helper_HeadScript::FILE,
        $spec = null,
        $placement = 'APPEND',
        array $attrs = array(),
        $type = 'text/javascript')
    {
        parent::headScript($mode, $spec, $placement, $attrs, $type);
        return $this;
    }
}
