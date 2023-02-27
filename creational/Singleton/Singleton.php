<?php

namespace TheBedouinCoder\DesingPatterns\Creational\Singleton;

// trait Singleton
class Singleton
{
    private static $instances = [];

    protected final function __construct() { }

    protected final function __clone() { }

    public final function __wakeup()
    {
        throw new \Exception("This is forbidden.");
    }

    public static function getInstance(): self
    {
        $currentClass = static::class;
        if (!isset(self::$instances[$currentClass])) {
            self::$instances[$currentClass] = new static();
        }

        return self::$instances[$currentClass];
    }

}
