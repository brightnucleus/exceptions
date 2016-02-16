<?php
/**
 * Bright Nucleus Core Out Of Bounds Exception.
 *
 * This exception is thrown if a value is not a valid key. This represents
 * errors that cannot be detected at compile time.
 *
 * @see       http://php.net/manual/class.outofboundsexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use OutOfBoundsException as StandardOutOfBoundsException;

/**
 * Class OutOfBoundsException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class OutOfBoundsException extends StandardOutOfBoundsException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
