<?php
/**
 * Bright Nucleus Core Underflow Exception.
 *
 * This exception is thrown when performing an invalid operation on an empty
 * container, such as removing an element.
 *
 * @see       http://php.net/manual/class.underflowexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use UnderflowException as StandardUnderflowException;

/**
 * Class UnderflowException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class UnderflowException extends StandardUnderflowException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
