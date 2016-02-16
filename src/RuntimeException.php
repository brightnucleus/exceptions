<?php
/**
 * Bright Nucleus Core Runtime Exception.
 *
 * This exception is thrown if an error which can only be found on runtime
 * occurs.
 *
 * @see       http://php.net/manual/class.runtimeexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use RuntimeException as StandardRuntimeException;

/**
 * Class RuntimeException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class RuntimeException extends StandardRuntimeException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
