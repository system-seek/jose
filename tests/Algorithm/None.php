<?php

namespace SpomkyLabs\JOSE\Tests\Algorithm;

use SpomkyLabs\JOSE\Algorithm\None as Base;

/**
 * Simple class tu use plaintext JWT for tests.
 * The class is exactly the same as other algorithms. We could use traits to avoid duplicated code lines, but tests will fail on PHP 5.3
 */
class None extends Base
{
    protected $values = array();

    public function __construct()
    {
        $this->setValue('kty', 'none');
    }

    public function getValue($key)
    {
        return isset($this->values[$key]) ? $this->values[$key] : null;
    }

    public function setValue($key, $value)
    {
        $this->values[$key] = $value;

        return $this;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setValues(array $values)
    {
        $this->values = $values;

        return $this;
    }
}
