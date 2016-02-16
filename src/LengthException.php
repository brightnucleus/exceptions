<?php
/**
 * Bright Nucleus Core Length Exception
 *
 * This exception is thrown if a length is invalid.
 *
 * @see       http://php.net/manual/class.lengthexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use LengthException as StandardLengthException;

/**
 * Class LengthException
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class LengthException extends StandardLengthException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
