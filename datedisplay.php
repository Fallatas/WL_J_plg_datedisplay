<?php
// No direct access.
defined('_JEXEC') or die;

class plgContentDatedisplay extends JPlugin 
{
	
	public function onContentPrepare($context, &$row, &$params, $page = 0)
	{
		$canProceed = $context == 'com_content.article';
		
		if(!canProceed){
			return;
		}
		
		$date = JFactory::getDate();
		
		$row->text = "<p>Sie betrachten diesen Inhalt am "
		. $date->format("d.m.y") . "</p>"
		. $row->text;
	}
}

?>