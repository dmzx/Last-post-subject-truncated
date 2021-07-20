<?php
/**
 *
 * Last post subject truncated. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dmzx\lastpostsubjecttruncated\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\user;
use phpbb\config\config;

/**
 * Last post subject truncated Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	/** @var user */
	protected $user;

	/** @var config */
	protected $config;

	public static function getSubscribedEvents()
	{
		return [
			'core.display_forums_modify_template_vars'	=> 'display_forums_modify_template_vars',
		];
	}

	/**
	 * Constructor
	 *
	 * @param user		$user
	 * @param config	$config
	 */
	public function __construct(
		user $user,
		config $config
	)
	{
		$this->user 		= $user;
		$this->config 		= $config;
	}

	public function display_forums_modify_template_vars($event)
	{
		$forum_row = $event['forum_row'];

		$last_post_subject = utf8_decode_ncr(censor_text($event['row']['forum_last_post_subject']));
		$last_post_subject_truncated = truncate_string($last_post_subject, $this->config['dmzx_lastpostsubjecttruncated_value'], 255, false, $this->user->lang['ELLIPSIS']);

		$forum_row['LAST_POST_SUBJECT_TRUNCATED'] = $last_post_subject_truncated;

		$event['forum_row'] = $forum_row;
	}
}
