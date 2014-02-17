<?php
namespace Craft;

/**
 *
 */
class StructureModel extends BaseModel
{
	/**
	 * @access protected
	 * @return array
	 */
	protected function defineAttributes()
	{
		return array(
			'id'             => AttributeType::Number,
			'maxLevels'      => AttributeType::Number,
			'movePermission' => AttributeType::String,
		);
	}

	/**
	 * Returns whether elements in this structure can be sorted by the current user.
	 *
	 * @return bool
	 */
	public function isSortable()
	{
		return (!$this->movePermission || craft()->userSession->checkPermission($this->movePermission));
	}
}
