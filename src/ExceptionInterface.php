<?php
/**
 * Bright Nucleus Exception Interface.
 *
 * All exceptions used in the Bright Nucleus framework both implement this base
 * interface, and extend one of the SPL extensions. This way, you have several
 * ways of catching specific extension groups:
 *
 * 1. Catch all exceptions: `\Exception`
 *
 * 2. Catch all exceptions thrown by a Bright Nucleus library:
 * `\BrightNucleus\Exception\ExceptionInterface`
 *
 * 3. Catch a specific SPL exception (BrightNucleus or not): `\LogicException`
 *
 * 4. Catch a specific SPL exception thrown by a Bright Nucleus library:
 * `\BrightNucleus\Exception\LogicException`
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

/**
 * Interface ExceptionInterface.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
interface ExceptionInterface
{

    /**
     * Get the name of the module that has thrown the exception.
     *
     * @since 1.0.0
     *
     * @return string Name of the module that has thrown the exception.
     */
    public function getModule();

    /**
     * Set the name of the module that has thrown the exception.
     *
     * @since 1.0.0
     *
     * @param string $module Name of the module that has thrown the exception.
     */
    public function setModule($module);
}
