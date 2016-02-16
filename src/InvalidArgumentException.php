<?php
/**
 * Bright Nucleus Core Invalid Argument Exception.
 *
 * This exception is thrown if an argument is not of the expected type.
 *
 * @see       http://php.net/manual/class.invalidargumentexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use InvalidArgumentException as StandardInvalidArgumentException;

/**
 * Class InvalidArgumentException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class InvalidArgumentException extends StandardInvalidArgumentException implements ExceptionInterface {

	use ModuleExceptionTrait;
}
