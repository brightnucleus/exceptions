<?php
/**
 * Bright Nucleus Core Logic Exception
 *
 * This exception is thrown to represent an error in the program logic. This
 * kind of exception should lead directly to a fix in your code.
 *
 * @see       http://php.net/manual/class.logicexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use LogicException as StandardLogicException;

/**
 * Class LogicException
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class LogicException extends StandardLogicException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
