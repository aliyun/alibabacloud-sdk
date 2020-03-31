<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class imageRegistryCredential extends Model
{
    public $server;
    public $userName;
    public $password;
    protected $_required = [
        'server'   => true,
        'userName' => true,
        'password' => true,
    ];
    protected $_name = [
        'server'   => 'Server',
        'userName' => 'UserName',
        'password' => 'Password',
    ];
    protected $_description = [
        'server'   => 'server',
        'userName' => 'userName',
        'password' => 'password',
    ];
}
