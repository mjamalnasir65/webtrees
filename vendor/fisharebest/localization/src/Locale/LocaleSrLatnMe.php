<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSrLatnMe
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSrLatnMe extends LocaleSrLatn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMe;
	}
}