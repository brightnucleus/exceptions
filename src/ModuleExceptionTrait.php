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

use Exception;

trait ModuleExceptionTrait
{

    /**
     * The name of the module that has thrown the exception.
     *
     * @since 0.1.0
     *
     * @var string
     */
    protected $module;

    /**
     * Construct the exception.
     *
     * @since 0.1.0
     *
     * @param string    $message  Optional. The Exception message to throw.
     * @param int       $code     Optional. The Exception code.
     * @param Exception $previous Optional. The previous exception used for the
     *                            exception chaining.
     * @param string    $module   Optional. Name of the module the exception
     *                            was thrown in.
     */
    public function __construct($message = '', $code = 0, Exception $previous = null, $module = '')
    {

        parent::__construct($message, $code, $previous);

        if ('' === $module) {
            $module = (string)static::class;
        }

        $this->set_module($module);
    }

    /**
     * Get the name of the module that has thrown the exception.
     *
     * @since 0.1.0
     *
     * @return string Name of the module that has thrown the exception.
     */
    public function get_module()
    {
        return (string)$this->module;
    }

    /**
     * Set the name of the module that has thrown the exception.
     *
     * @since 0.1.0
     *
     * @param string $module Name of the module that has thrown the exception.
     */
    public function set_module($module)
    {
        $this->module = (string)$module;
    }
}
