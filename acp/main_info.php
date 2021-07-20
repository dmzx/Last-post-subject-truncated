<?php
/**
 *
 * Last post subject truncated. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dmzx\lastpostsubjecttruncated\acp;

/**
 * Last post subject truncated ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\dmzx\lastpostsubjecttruncated\acp\main_module',
			'title'		=> 'ACP_LASTPOSTSUBJECTTRUNCATED_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_LASTPOSTSUBJECTTRUNCATED',
					'auth'	=> 'ext_dmzx/lastpostsubjecttruncated && acl_a_board',
					'cat'	=> ['ACP_LASTPOSTSUBJECTTRUNCATED_TITLE']
				],
			],
		];
	}
}
