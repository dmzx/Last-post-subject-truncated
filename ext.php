<?php
/**
 *
 * Last post subject truncated. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dmzx\lastpostsubjecttruncated;

use phpbb\extension\base;

class ext extends base
{
	public function is_enableable()
	{
		return phpbb_version_compare(PHPBB_VERSION, '3.3.0', '>=');
	}
}
