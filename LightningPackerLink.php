<?php

/**
 * Zend_View_Helper_LightningPackerLink
 *
 * @package LightningPacker
 * @version 1.0
 * @copyright Copyright (C) 2010 Diogo Oliveira de Melo. All rights reserved.
 * @author Diogo Oliveira de Melo <dmelo87@gmail.com>
 * @license GPL version 3
 */
class Zend_View_Helper_LightningPackerLink extends Zend_View_Helper_HeadLink
{
    public function toString($indent = null)
    {
        $this->getContainer()->ksort();
        $bag = array();

        foreach ($this as $item) {
            $item = (array) $item;
            $bag[] = $item['href'];
        }

        return lightningPacker($bag, 'css');
    }


    public function lightningPackerLink(array $attributes = null,
        $placement = Zend_View_Helper_Placeholder_Container_Abstract::APPEND)
    {
        parent::headLink($attributes, $placement);
        return $this;
    }
}
