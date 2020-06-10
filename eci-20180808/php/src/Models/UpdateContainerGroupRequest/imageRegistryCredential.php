<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

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
