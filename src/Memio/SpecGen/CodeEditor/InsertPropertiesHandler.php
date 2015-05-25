<?php

/*
 * This file is part of the memio/spec-gen package.
 *
 * (c) Loïc Chardonnet <loic.chardonnet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Memio\SpecGen\CodeEditor;

use Memio\SpecGen\CommandBus\Command;
use Memio\SpecGen\CommandBus\CommandHandler;

class InsertPropertiesHandler implements CommandHandler
{
    /**
     * @var InsertPropertyHandler
     */
    private $insertPropertyHandler;

    /**
     * @param InsertPropertyHandler $insertPropertyHandler
     */
    public function __construct(InsertPropertyHandler $insertPropertyHandler)
    {
        $this->insertPropertyHandler = $insertPropertyHandler;
    }

    /**
     * {@inheritDoc}
     */
    public function supports(Command $command)
    {
        return $command instanceof InsertProperties;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(Command $command)
    {
        foreach ($command->properties as $property) {
            $this->insertPropertyHandler->handle(new InsertProperty($command->file, $property));
        }
    }
}
