<?php

namespace w3lib\Library;

use Exception;
use ReflectionClass;
use JsonSerializable;

abstract class Model implements JsonSerializable
{
    private $ref;

    public function __construct ()
    {
        $this->ref = new ReflectionClass (get_class ($this));
    }

    public function __sleep ()
    {
        return array_keys ((array) $this);
    }

    public function jsonSerialize ()
    {
        return array_intersect_key (
            get_object_vars ($this),

            array_combine (
                $this->__sleep (),
                $this->__sleep ()
            )
        );
    }

    public abstract function read (Stream &$stream, $context = NULL);

    public static function unpack (Stream &$stream, $context = NULL)
    {
        $model = get_called_class ();
        $model = new $model ();

        // Logger::debug (
        //     'Unpacking [%s]',
        //     get_class ($model)
        // );

        $offset = $stream->offset ();

        try {
            $model->read ($stream, $context);
        } catch (Exception $e) {
            $stream->seek ($offset);
            throw $e;
        }

        return $model;
    }

    public static function unpackAll (Stream &$stream, $context = NULL)
    {
        for ($i = 1; /* */ ; $i++) {
            try {
                yield static::unpack ($stream, $context);
            } catch (Exception $e) {
                Logger::debug ('Exception: ' . $e->getMessage ());
                return;
            }
        }
    }

    public function keyName ($value)
    {
        $keys = [ ];

        foreach ($this->ref->getConstants () as $k => $v) {
            if ($v === $value) {
                $keys [] = $k;
            }
        }

        return implode (':', $keys) ?? '?';
    }
}

?>