<?php

namespace DataValues\Tests;

use DataValues\UnknownValue;

/**
 * @covers DataValues\UnknownValue
 *
 * @group DataValue
 * @group DataValueExtensions
 * @group UnknownValueTest
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class UnknownValueTest extends DataValueTest {

	/**
	 * @see DataValueTest::getClass
	 *
	 * @return string
	 */
	public function getClass() {
		return 'DataValues\UnknownValue';
	}

	public function validConstructorArgumentsProvider() {
		$argLists = array();

		$argLists[] = array( 42 );
		$argLists[] = array( array() );
		$argLists[] = array( false );
		$argLists[] = array( true );
		$argLists[] = array( null );
		$argLists[] = array( 'foo' );
		$argLists[] = array( '' );
		$argLists[] = array( ' foo bar baz foo bar baz foo bar baz foo bar baz foo bar baz foo bar baz ' );

		return $argLists;
	}

	public function invalidConstructorArgumentsProvider() {
		return array(
			array(),
		);
	}

	public function testConstructorWithInvalidArguments() {
		$this->markTestSkipped( 'UnknownValue has no invalid arguments' );
	}

	/**
	 * @dataProvider instanceProvider
	 */
	public function testGetValue( UnknownValue $value, array $arguments ) {
		$this->assertEquals( $arguments[0], $value->getValue() );
	}

}
