<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

class Scheduler
{
    /**
     * @return mixed
     */
    public function add(callable $func, ...$params)
    {
    }

    /**
     * @param mixed $n
     * @return mixed
     */
    public function parallel($n, callable $func = null, ...$params)
    {
    }

    /**
     * @return mixed
     */
    public function set(array $settings)
    {
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
    }

    /**
     * @return mixed
     */
    public function start()
    {
    }
}
