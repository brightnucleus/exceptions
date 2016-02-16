<?php
/**
 * Bright Nucleus Core BadFunctionCall Exception.
 *
 * This exception is thrown if a callback refers to an undefined function or if
 * some arguments are missing.
 *
 * @see       http://php.net/manual/class.badfunctioncallexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use BadFunctionCallException as StandardBadFunctionCallException;

/**
 * Class BadFunctionCallException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class BadFunctionCallException extends StandardBadFunctionCallException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
