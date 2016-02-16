<?php
/**
 * Bright Nucleus Core Out Of Range Exception.
 *
 * This exception is thrown when an illegal index was requested. This
 * represents errors that should be detected at compile time.
 *
 * @see       http://php.net/manual/class.outofrangeexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use OutOfRangeException as StandardOutOfRangeException;

/**
 * Class OutOfRangeException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class OutOfRangeException extends StandardOutOfRangeException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
