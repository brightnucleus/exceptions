<?php
/**
 * Bright Nucleus Core Overflow Exception.
 *
 * This exception is thrown when adding an element to a full container.
 *
 * @see       http://php.net/manual/class.overflowexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use OverflowException as StandardOverflowException;

/**
 * Class OverflowException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class OverflowException extends StandardOverflowException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
