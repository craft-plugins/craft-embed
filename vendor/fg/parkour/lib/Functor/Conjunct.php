<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */
namespace Parkour\Functor;

use Parkour\Functor;



/**
 *
 */
class Conjunct extends Functor {

	/**
	 *	Calculates the conjunction of two values.
	 *
	 *	@param mixed $first First value.
	 *	@param mixed $second Second value.
	 *	@return boolean Result.
	 */
	public function invoke($first, $second) {
		return $first && $second;
	}
}
