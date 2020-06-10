<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmInstanceGlobalConfigRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description ttl
     *
     * @var int
     */
    public $ttl;

    /**
     * @description userDomainName
     *
     * @var string
     */
    public $userDomainName;

    /**
     * @description lbaStrategy
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description alertGroup
     *
     * @var string
     */
    public $alertGroup;

    /**
     * @description cnameMode
     *
     * @var string
     */
    public $cnameMode;

    /**
     * @description cnameCustomDomainName
     *
     * @var string
     */
    public $cnameCustomDomainName;
    protected $_name = [
        'lang'                  => 'Lang',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'ttl'                   => 'Ttl',
        'userDomainName'        => 'UserDomainName',
        'lbaStrategy'           => 'LbaStrategy',
        'alertGroup'            => 'AlertGroup',
        'cnameMode'             => 'CnameMode',
        'cnameCustomDomainName' => 'CnameCustomDomainName',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }
        if (null !== $this->cnameCustomDomainName) {
            $res['CnameCustomDomainName'] = $this->cnameCustomDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGtmInstanceGlobalConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }
        if (isset($map['CnameCustomDomainName'])) {
            $model->cnameCustomDomainName = $map['CnameCustomDomainName'];
        }

        return $model;
    }
}
