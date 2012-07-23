<?php

/*
 * This file is part of the FSi Component package.
 *
 * (c) Norbert Orzechowicz <norbert@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Component\Table\DataMapper;

use FSi\Component\Table\Column\ColumnTypeInterface;

interface DataMapperInterface 
{
    /**
     * Get data from object for specified column type. 
     * 
     * @param string $field
     * @param mixed $object
     * @throws DataMappingExteption - thrown when mapper cant fit any object data into column
     * @return boolean - return false if can't get value from object
     */
    public function getData($field, $object);
}