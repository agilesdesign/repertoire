<?php

namespace Repertoire\Models\Traits;

trait BootEvents
{
    public static function booting($callback, $priority = 0)
    {
        static::registerModelEvent('booting', $callback, $priority);
    }

    public static function booted($callback, $priority = 0)
    {
        static::registerModelEvent('booted', $callback, $priority);
    }
}