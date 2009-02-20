<?php

class SyncguideCommand extends CConsoleCommand
{
	public function getHelp()
	{
		return <<<EOD
USAGE
  yiic syncguide <language>

DESCRIPTION
  This command checks if the translations for the guide in
  the specified language are out of date.

PARAMETERS
 * language: required, the ID of the language (e.g. ge, zh_cn) that
   should be checked for synchronization.

EOD;
	}

	/**
	 * Execute the action.
	 * @param array command line parameters specific for this command
	 */
	public function run($args)
	{
		if(!isset($args[0]))
			$this->usageError('the language ID is not specified.');
		$path=Yii::getPathOfAlias('application').'/../guide/'.$args[0];
		if(!is_dir($path))
			$this->usageError("no translation available for language '{$args[0]}'.");
		$srcPath=Yii::getPathOfAlias('application').'/../guide/source';

		$files=CFileHelper::findFiles($srcPath,array('fileTypes'=>array('txt'),'level'=>0));
		foreach($files as $file)
		{
			$name=basename($file);
			$display=str_pad($name,30,' ',STR_PAD_LEFT).': ';
			if(!preg_match('/\$Id:\s*([\w\.\-]+)\s*(\d+)/iu',file_get_contents($file),$matches) || $name!==$matches[1])
			{
				echo $display."revision token not found in source file.\n";
				continue;
			}
			$srcRevision=$matches[2];
			if(!is_file($path.'/'.$name))
				echo $display."translation not available.\n";
			else if(!preg_match('/\$Id:\s*([\w\.\-]+)\s*(\d+)/iu',file_get_contents($path.'/'.$name),$matches) || $name!==$matches[1])
				echo $display."revision token not found in translation.\n";
			else if($matches[2]===$srcRevision)
				echo $display."up-to-date.\n";
			else
				echo $display."outdated (source: $srcRevision, target: {$matches[2]}).\n";
		}
	}
}