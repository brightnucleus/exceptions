<?php
/**
 * Exceptions Test
 *
 * @package   BrightNucleus\Exception
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.brightnucleus.com/
 * @copyright 2015-2016 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Exception;

/**
 * Class ExceptionsTest
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class ExceptionsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test creation of Exceptions.
     *
     * @covers       \BrightNucleus\Exception\ModuleExceptionTrait::__construct
     *
     * @dataProvider exceptionsCreationDataProvider
     *
     * @since        0.1.0
     *
     * @param string $moduleName        Name of the module to pass into the
     *                                  exception.
     * @param string $createClass       Exception class to create.
     * @param array  $expectedToCatch   Array of exceptions that were caught.
     */
    public function testExceptionsCreation($moduleName, $createClass, $expectedToCatch)
    {

        // What follows is a horrible nesting structure that tries to catch
        // exceptions at all levels and builds an array with the names of the
        // exceptions it caught.
        // Apparently, PHP does not like you to catch a variable exception...

        $caught = [];
        try {
            try {
                try {
                    try {
                        try {
                            $exception = new $createClass();
                            /** @var \BrightNucleus\Exception\ExceptionInterface $exception */
                            $exception->setModule($moduleName);
                            throw $exception;
                        } catch (\BrightNucleus\Exception\AssertionFailedException $exception) {
                            $caught[] = '\BrightNucleus\Exception\AssertionFailedException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\BadFunctionCallException $exception) {
                            $caught[] = '\BrightNucleus\Exception\BadFunctionCallException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\BadMethodCallException $exception) {
                            $caught[] = '\BrightNucleus\Exception\BadMethodCallException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\DomainException $exception) {
                            $caught[] = '\BrightNucleus\Exception\DomainException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\InvalidArgumentException $exception) {
                            $caught[] = '\BrightNucleus\Exception\InvalidArgumentException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\LengthException $exception) {
                            $caught[] = '\BrightNucleus\Exception\LengthException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\LogicException $exception) {
                            $caught[] = '\BrightNucleus\Exception\LogicException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\OutOfBoundsException $exception) {
                            $caught[] = '\BrightNucleus\Exception\OutOfBoundsException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\OutOfRangeException $exception) {
                            $caught[] = '\BrightNucleus\Exception\OutOfRangeException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\OverflowException $exception) {
                            $caught[] = '\BrightNucleus\Exception\OverflowException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\RangeException $exception) {
                            $caught[] = '\BrightNucleus\Exception\RangeException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\RuntimeException $exception) {
                            $caught[] = '\BrightNucleus\Exception\RuntimeException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\UnderflowException $exception) {
                            $caught[] = '\BrightNucleus\Exception\UnderflowException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        } catch (\BrightNucleus\Exception\UnexpectedValueException $exception) {
                            $caught[] = '\BrightNucleus\Exception\UnexpectedValueException';
                            $this->assertEquals(
                                $moduleName,
                                $exception->getModule()
                            );
                            throw $exception;
                        }
                    } catch (\BrightNucleus\Exception\ExceptionInterface $exception) {
                        $caught[] = '\BrightNucleus\Exception\ExceptionInterface';
                        $this->assertEquals(
                            $moduleName,
                            $exception->getModule()
                        );
                        throw $exception;
                    }
                } catch (\BadMethodCallException $exception) {
                    $caught[] = '\BadMethodCallException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\BadFunctionCallException $exception) {
                    $caught[] = '\BadFunctionCallException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\DomainException $exception) {
                    $caught[] = '\DomainException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\InvalidArgumentException $exception) {
                    $caught[] = '\InvalidArgumentException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\LengthException $exception) {
                    $caught[] = '\LengthException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\OutOfBoundsException $exception) {
                    $caught[] = '\OutOfBoundsException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\OutOfRangeException $exception) {
                    $caught[] = '\OutOfRangeException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\OverflowException $exception) {
                    $caught[] = '\OverflowException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\RangeException $exception) {
                    $caught[] = '\RangeException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\UnderflowException $exception) {
                    $caught[] = '\UnderflowException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                } catch (\UnexpectedValueException $exception) {
                    $caught[] = '\UnexpectedValueException';
                    $this->assertEquals(
                        $moduleName,
                        $exception->getModule()
                    );
                    throw $exception;
                }
            } catch (\LogicException $exception) {
                $caught[] = '\LogicException';
                $this->assertEquals($moduleName, $exception->getModule());
                throw $exception;
            } catch (\RuntimeException $exception) {
                $caught[] = '\RuntimeException';
                $this->assertEquals($moduleName, $exception->getModule());
                throw $exception;
            }
        } catch (\Exception $exception) {
            $caught[] = '\Exception';
            $this->assertEquals($moduleName, $exception->getModule());
        }
        $this->assertEquals($expectedToCatch, $caught);
    }

    /**
     * Provide testable data to the testFeatureSupport() method.
     *
     * @since 0.1.0
     *
     * @return array
     */
    public function exceptionsCreationDataProvider()
    {
        return [
            // string $moduleName, string $createClass, array $expectedToCatch
            [
                'BadFunctionCallException Test Module',
                '\BrightNucleus\Exception\BadFunctionCallException',
                [
                    '\BrightNucleus\Exception\BadFunctionCallException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\BadFunctionCallException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'BadMethodCallException Test Module',
                '\BrightNucleus\Exception\BadMethodCallException',
                [
                    '\BrightNucleus\Exception\BadMethodCallException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\BadMethodCallException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'DomainException Test Module',
                '\BrightNucleus\Exception\DomainException',
                [
                    '\BrightNucleus\Exception\DomainException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\DomainException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'InvalidArgumentException Test Module',
                '\BrightNucleus\Exception\InvalidArgumentException',
                [
                    '\BrightNucleus\Exception\InvalidArgumentException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\InvalidArgumentException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'LengthException Test Module',
                '\BrightNucleus\Exception\LengthException',
                [
                    '\BrightNucleus\Exception\LengthException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\LengthException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'LogicException Test Module',
                '\BrightNucleus\Exception\LogicException',
                [
                    '\BrightNucleus\Exception\LogicException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'OutOfBoundsException Test Module',
                '\BrightNucleus\Exception\OutOfBoundsException',
                [
                    '\BrightNucleus\Exception\OutOfBoundsException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\OutOfBoundsException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'OutOfRangeException Test Module',
                '\BrightNucleus\Exception\OutOfRangeException',
                [
                    '\BrightNucleus\Exception\OutOfRangeException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\OutOfRangeException',
                    '\LogicException',
                    '\Exception',
                ],
            ],
            [
                'OverflowException Test Module',
                '\BrightNucleus\Exception\OverflowException',
                [
                    '\BrightNucleus\Exception\OverflowException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\OverflowException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'RangeException Test Module',
                '\BrightNucleus\Exception\RangeException',
                [
                    '\BrightNucleus\Exception\RangeException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\RangeException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'RuntimeException Test Module',
                '\BrightNucleus\Exception\RuntimeException',
                [
                    '\BrightNucleus\Exception\RuntimeException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'UnderflowException Test Module',
                '\BrightNucleus\Exception\UnderflowException',
                [
                    '\BrightNucleus\Exception\UnderflowException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\UnderflowException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
            [
                'UnexpectedValueException Test Module',
                '\BrightNucleus\Exception\UnexpectedValueException',
                [
                    '\BrightNucleus\Exception\UnexpectedValueException',
                    '\BrightNucleus\Exception\ExceptionInterface',
                    '\UnexpectedValueException',
                    '\RuntimeException',
                    '\Exception',
                ],
            ],
        ];
    }

    /**
     * Test setting the module name from a Bright Nucleus exception.
     *
     * @covers \BrightNucleus\Exception\ModuleExceptionTrait::getModule
     * @covers \BrightNucleus\Exception\ModuleExceptionTrait::setModule
     */
    public function testSetModule()
    {
        try {
            $exception = new \BrightNucleus\Exception\RuntimeException(
                '',
                0,
                null
            );
            $exception->setModule('a_module_name');
            throw $exception;
        } catch (\Exception $exception) {
            /** @var \BrightNucleus\Exception\ExceptionInterface $exception */
            $this->assertEquals(
                'a_module_name',
                $exception->getModule()
            );
        }
    }
}
