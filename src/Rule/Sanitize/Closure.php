<?php
/**
 *
 * This file is part of the Aura project for PHP.
 *
 * @package Aura.Filter
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Filter\Rule\Sanitize;

use Closure as PhpClosure;

/**
 *
 * Rule to apply a closure to the data.
 *
 * @package Aura.Filter
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
class Closure
{
    /**
     *
     * Sanitizes a value using a closure.
     *
     * @param \Closure $closure A PHP closure.
     *
     * @return bool True if the value was sanitized, false if not.
     *
     */
    public function __invoke($subject, $field, PhpClosure $closure)
    {
        return $closure($subject, $field);
    }
}
