<?php
/**
 * Bright Nucleus Core AssertionFailed Exception.
 *
 * This exception is thrown when an assertion made through the Assertion class fails.
 *
 * @see       https://github.com/beberlei/assert
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use Assert\InvalidArgumentException as AssertException;

/**
 * Class AssertionFailedException.
 *
 * @since   0.2.1
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class AssertionFailedException extends AssertException implements ExceptionInterface
{

    use ModuleExceptionTrait;

    /**
     * Instantiate a AssertionFailedException object.
     *
     * @since 0.2.1
     *
     * @param string     $message      Optional. Exception message. Defaults to empty string.
     * @param int        $code         Optional. Exception code. Defaults to 0.
     * @param mixed|null $propertyPath Optional. Sub-property causing the failure of a currently asserted objects.
     *                                 Defaults to null.
     * @param mixed|null $value        Optional. The value that caused the assertion to fail. Defaults to null.
     * @param array      $constraints  Optional. Constraints that applied to the failed assertion. Defaults to empty
     *                                 array.
     */
    public function __construct($message = '', $code = 0, $propertyPath = null, $value = null, array $constraints = [])
    {
        parent::__construct($message, $code, $propertyPath, $value, $constraints);
    }
}
