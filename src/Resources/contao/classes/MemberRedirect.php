<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * @copyright  w3scouts.com
 * @author     Darko Selesi
 * @license    LGPL
 */

namespace w3s\memberredirect;


class MemberRedirect
{
	public function redirectAfterLogin(\User $objUser)
	{
		if ($objUser instanceof \FrontendUser && !empty($objUser->redirectAfterLogin)) {
			$objTarget = \PageModel::findById($objUser->redirectAfterLogin);
			if($objTarget) {
				$strRedirect = $objTarget->getFrontendUrl();
				\Controller::redirect($strRedirect);
			}
		}
	}

	public function redirectAfterLogout(\User $objUser)
	{
		if ($objUser instanceof \FrontendUser && !empty($objUser->redirectAfterLogout)) {
			$objTarget = \PageModel::findById($objUser->redirectAfterLogout);
			if($objTarget) {
				$strRedirect = $objTarget->getFrontendUrl();
				\Controller::redirect($strRedirect);
			}
		}
	}
}
