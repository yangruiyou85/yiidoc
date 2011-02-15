<?php

class SyncguideCommand extends CConsoleCommand
{
	public $type='guide';

	public function getHelp()
	{
		return <<<EOD
USAGE
  yiic syncguide <language>

DESCRIPTION
  This command checks if the translations for the guide in
  the specified language are out of date.

PARAMETERS
 * language: required, the ID of the language (e.g. de, zh_cn) that
   should be checked for synchronization.

EOD;
	}

	/**
	 * Execute the action.
	 * @param array command line parameters specific for this command
	 */
	public function run($args)
	{
	  // Url template
	  $template='http://code.google.com/p/yii/source/diff?format=side&path=/trunk/docs/guide/{name}&old={old}&r={new}';
	  
		if(!isset($args[0]))
			$this->usageError('the language ID is not specified.');
		$path=Yii::getPathOfAlias('application').'/../'.$this->type.'/'.$args[0];
		if(!is_dir($path))
			$this->usageError("no translation available for language '{$args[0]}'.");
		$srcPath=Yii::getPathOfAlias('application').'/../'.$this->type.'/source';

		$files=CFileHelper::findFiles($srcPath,array('fileTypes'=>array('txt'),'level'=>0));
		$results=array();
		$urls=array();
		foreach($files as $file)
		{
			$name=basename($file);
			$srcContent=file_get_contents($file);
			if(!preg_match('/\$Id:\s*([\w\.\-]+)\s*(\d+)/iu',$srcContent,$matches) || $name!==$matches[1])
			{
				$results[$name]="revision token not found in source file.";
				continue;
			}
			$srcRevision=$matches[2];
			if(!is_file($path.'/'.$name) || ($content=file_get_contents($path.'/'.$name))===$srcContent)
				$results[$name]="not translated yet.";
			else if(!preg_match('/\$Id:\s*([\w\.\-]+)\s*(\d+)/iu',$content,$matches) || $name!==$matches[1])
				$results[$name]="revision token not found in translation.";
			else if($matches[2]>=$srcRevision)
				$results[$name]="up-to-date.";
			else
			{
				$results[$name]="outdated (source: r$srcRevision, translation: r{$matches[2]}).";
				
				$tr=array('{name}'=>$name,'{old}'=>$matches[2],'{new}'=>$srcRevision);
				$urls[$name]=strtr($template,$tr);
			}
		}

		asort($results);
		foreach($results as $name=>$result)
		{
			echo str_pad($name,30,' ',STR_PAD_LEFT).': '.$result."\n";
		}
		
		echo "\n****************** diff URL's ******************\n";
		asort($urls);
		foreach($urls as $name=>$result)
		{
			echo $name.":\n".$result."\n\n";
		}
	}
}
