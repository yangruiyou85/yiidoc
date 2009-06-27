<?php

require_once(dirname(__FILE__).'/SyncguideCommand.php');

class SyncblogCommand extends SyncguideCommand
{
	public $type='blog';

	public function getHelp()
	{
		return <<<EOD
USAGE
  yiic syncblog <language>

DESCRIPTION
  This command checks if the translations for the blog tutorial in
  the specified language are out of date.

PARAMETERS
 * language: required, the ID of the language (e.g. de, zh_cn) that
   should be checked for synchronization.

EOD;
	}
}