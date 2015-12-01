<?php

/*
 * This file is part of the memio/spec-gen package.
 *
 * (c) Loïc Faugeron <faugeron.loic@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Memio\SpecGen\CodeEditor;

use Gnugat\Redaktilo\File;
use Memio\Model\Method;
use Memio\SpecGen\CommandBus\Command;

class InsertConstructor implements Command
{
    /**
     * @var File
     */
    public $file;

    /**
     * @var Method
     */
    public $method;

    /**
     * @param File   $file
     * @param Method $method
     */
    public function __construct(File $file, Method $method)
    {
        $this->file = $file;
        $this->method = $method;
    }
}
