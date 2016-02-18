<?php
/**
 * Bright Nucleus Core Module-specific Exception Trait.
 *
 * This trait adds module-specific information to the exceptions if available.
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

trait ModuleExceptionTrait
{

    /**
     * The name of the module that has thrown the exception.
     *
     * @since 0.1.0
     *
     * @var string
     */
    protected $_bnModule;

    /**
     * Set the name of the module that has thrown the exception.
     *
     * @since 0.1.0
     *
     * @param string $module Name of the module that has thrown the exception.
     */
    public function setModule($module)
    {
        $this->_bnModule = (string)$module;
    }

    /**
     * Get the name of the module that has thrown the exception.
     *
     * @since 0.1.0
     *
     * @return string Name of the module that has thrown the exception.
     */
    public function getModule()
    {
        return (string)$this->_bnModule;
    }
}
