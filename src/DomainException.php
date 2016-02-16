<?php
/**
 * Bright Nucleus Core Domain Exception.
 *
 * This exception is thrown if a value does not adhere to a defined valid data
 * domain.
 *
 * @see       http://php.net/manual/class.domainexception.php
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

use DomainException as StandardDomainException;

/**
 * Class DomainException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class DomainException extends StandardDomainException implements ExceptionInterface
{

    use ModuleExceptionTrait;
}
