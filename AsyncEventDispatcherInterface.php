<?php

/*
 * This file is part of the Symfony Async Kernel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Symfony\Component\HttpKernel;

use React\Promise\PromiseInterface;
use Symfony\Component\HttpKernel\Event\KernelEvent;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * Class AsyncEventDispatcher.
 */
interface AsyncEventDispatcherInterface extends EventDispatcherInterface
{
    /**
     * Dispatch an event asynchronously.
     *
     * @param string      $eventName
     * @param KernelEvent $event
     *
     * @return PromiseInterface
     */
    public function asyncDispatch( string $eventName, KernelEvent $event): PromiseInterface;
}
