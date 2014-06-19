<?php
/**
 * Update an Item
 */
class SendexItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'SendexItem';
	public $classKey = 'SendexItem';
	public $languageTopics = array('sendex');
	public $permission = 'edit_document';
}

return 'SendexItemUpdateProcessor';
