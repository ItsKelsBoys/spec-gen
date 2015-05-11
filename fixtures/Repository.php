<?php

/*
 * This file is part of the memio/spec-gen package.
 *
 * (c) Loïc Chardonnet <loic.chardonnet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Memio\SpecGen\Fixtures;

class Repository
{
    /**
     * @param string $name
     *
     * @return string
     */
    public function find($name)
    {
        return file_get_contents(__DIR__.'/'.$name.'.txt');
    }
}
