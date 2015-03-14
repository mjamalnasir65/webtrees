<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTaLk
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTaLk extends LocaleTa {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryLk;
	}
}