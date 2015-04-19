<?php
/**
 * Base format for Ark name.
 *
 * @package Ark
 */
class Ark_Name_Base extends Ark_Name_Abstract
{
    protected function _create($record)
    {
        switch (get_class($record)) {
            case 'Collection':
                return $this->_addZeroForCollection() . $this->_convertIntegerToAlphabet($record->id);
            case 'Item':
                return $this->_convertIntegerToAlphabet($record->id);
        }
    }
}
