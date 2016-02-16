<?php
/**
 * Bright Nucleus Core Bad Method Call Exception.
 *
 * This exception is thrown if a callback refers to an undefined method or if
 * some arguments are missing.
 *
 * @see       http://php.net/manual/class.badmethodcallexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use BadMethodCallException as StandardBadMethodCallException;

/**
 * Class BadMethodCallException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class BadMethodCallException extends StandardBadMethodCallException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
