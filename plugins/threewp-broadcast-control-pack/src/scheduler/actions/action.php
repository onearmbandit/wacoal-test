<?php

namespace threewp_broadcast\premium_pack\scheduler\actions;

/**
	@brief		Common action class for UBS.
	@since		2014-11-15 17:20:18
**/
class action
	extends \threewp_broadcast\actions\action
{
	public function get_prefix()
	{
		return 'threewp_broadcast_scheduler_';
	}
}
