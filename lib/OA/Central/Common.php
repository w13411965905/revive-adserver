<?php

/*
+---------------------------------------------------------------------------+
| Openads v2.5                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

require_once MAX_PATH.'/lib/OA.php';
require_once MAX_PATH.'/lib/OA/Central/Rpc.php';


/**
 * OAP binding to the OAC generic API
 *
 */
class OA_Central_Common
{
    /**
     * Class constructor
     *
     * @return OA_Central_Common
     */
    function OA_Central_Common()
    {
        OA::debug('This class only contains static methods', PEAR_LOG_ERR);
        exit;
    }

    /**
     * Refs R-AN-1: Connecting Openads Platform with SSO
     *
     * @todo Need clarification
     *
     * @param string $ssoAdmin    Openads SSO username
     * @param string $ssoPassword Openads SSO password
     * @return mixed A boolean True if the platform is correctly connected to OAC,
     *               PEAR_Error otherwise
     */
    function connectOAPToOAC()
    {
        return $this->oRpc->callSSo(__METHOD__);
    }

    /**
     * A method to retrieve the image data of a captcha image
     *
     * @see R-AN-20: Captcha Validation
     *
     * Array
     * (
     *     [type] => 'image/png',
     *     [content] => <binary data>
     *
     * )
     *
     * @return mixed An array with the image content type and binary data if successful,
     *               PEAR_Error otherwise
     */
    function getCaptcha()
    {
        return $this->oRpc->callNoAuth(__METHOD__);
    }
}



?>