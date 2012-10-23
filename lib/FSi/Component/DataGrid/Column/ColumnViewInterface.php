<?php

/*
 * This file is part of the FSi Component package.
 *
 * (c) Norbert Orzechowicz <norbert@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Component\DataGrid\Column;

interface ColumnViewInterface
{
    /**
     * Set view attribute
     *
     * @param string $name
     * @param mixed $value
     */
    public function setAttribute($name, $value);

    /**
     * Get view attribute
     *
     * @param string $name
     * @return mixed
     */
    public function getAttribute($name);

    /**
     * Check if view attribute exists.
     *
     * @param string $name
     * @return boolean
     */
    public function hasAttribute($name);

    /**
     * Set the source object.
     *
     * @param mixed $source
     */
    public function setSource($source);

    /**
     * Get the source object.
     *
     * @return mixed
     */
    public function getSource();

    /**
     * Get view value. In most cases it should be simple string.
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set view value.
     *
     * @param mixed $value
     */
    public function setValue($value);
}