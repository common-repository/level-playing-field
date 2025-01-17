<?php
/**
 * YIKES Inc. Level Playing Field Plugin.
 *
 * @package Yikes\LevelPlayingField
 * @author  Jeremy Pry
 * @license GPL2
 */

namespace Yikes\LevelPlayingField\Exception;

/**
 * Class InvalidProperty
 *
 * @since   1.0.0
 * @package Yikes\LevelPlayingField
 */
class InvalidProperty extends \InvalidArgumentException implements Exception {

	/**
	 * Create a new instance of the class when a property cannot be modified.
	 *
	 * @since 1.0.0
	 *
	 * @param string $property The property that cannot be modified.
	 *
	 * @return static
	 */
	public static function cannot_modify( $property ) {
		return new static( sprintf(
			'The property "%s" cannot be modified.',
			$property
		) );
	}

	/**
	 * Create a new instance of the class when the property does not allow multiple values.
	 *
	 * @since 1.0.0
	 *
	 * @param string $property The property name.
	 *
	 * @return static
	 */
	public static function not_multiple( $property ) {
		return new static( sprintf(
			'The property "%s" does not allow multiple values.',
			$property
		) );
	}
}
