<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class imageRegistryCredential extends Model
{
    /**
     * @description server
     *
     * @var string
     */
    public $server;
    /**
     * @description userName
     *
     * @var string
     */
    public $userName;
    /**
     * @description password
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'server'   => 'Server',
        'userName' => 'UserName',
        'password' => 'Password',
    ];

    public function validate()
    {
        Model::validateRequired('server', $this->server, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('password', $this->password, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['Server']   = $this->server;
        $res['UserName'] = $this->userName;
        $res['Password'] = $this->password;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageRegistryCredential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
