<?php
/**
 *
 * Last post subject truncated. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dmzx\lastpostsubjecttruncated\migrations;

class install_lastpostsubjecttruncated extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return [
			'\phpbb\db\migration\data\v330\v330'
		];
	}

	public function update_data()
	{
		return [
			['config.add', ['dmzx_lastpostsubjecttruncated_value', 30]],
			['config.add', ['dmzx_lastpostsubjecttruncated_version', '1.0.0']],

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_LASTPOSTSUBJECTTRUNCATED_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_LASTPOSTSUBJECTTRUNCATED_TITLE',
				[
					'module_basename'	=> '\dmzx\lastpostsubjecttruncated\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
