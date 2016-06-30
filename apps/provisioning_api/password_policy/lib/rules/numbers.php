<?php
/**

 *
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCA\password_policy\Rules;

class Numbers {

	public function verify($password, $val) {
		if ($this->countDigits($password) < $val) {
			throw new \Exception("Password holds too less numbers. Minimum $val numbers are required.");
		}
	}

	private function countDigits( $str ) {
		return preg_match_all( "/[0-9]/", $str );
	}
}