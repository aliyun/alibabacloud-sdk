<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmInstanceGlobalConfigRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'ttl' => 'Ttl',
        'userDomainName' => 'UserDomainName',
        'lbaStrategy' => 'LbaStrategy',
        'alertGroup' => 'AlertGroup',
        'cnameMode' => 'CnameMode',
        'cnameCustomDomainName' => 'CnameCustomDomainName',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['InstanceId'] = $this->instanceId;
        $res['InstanceName'] = $this->instanceName;
        $res['Ttl'] = $this->ttl;
        $res['UserDomainName'] = $this->userDomainName;
        $res['LbaStrategy'] = $this->lbaStrategy;
        $res['AlertGroup'] = $this->alertGroup;
        $res['CnameMode'] = $this->cnameMode;
        $res['CnameCustomDomainName'] = $this->cnameCustomDomainName;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateGtmInstanceGlobalConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['InstanceName'])){
            $model->instanceName = $map['InstanceName'];
        }
        if(isset($map['Ttl'])){
            $model->ttl = $map['Ttl'];
        }
        if(isset($map['UserDomainName'])){
            $model->userDomainName = $map['UserDomainName'];
        }
        if(isset($map['LbaStrategy'])){
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if(isset($map['AlertGroup'])){
            $model->alertGroup = $map['AlertGroup'];
        }
        if(isset($map['CnameMode'])){
            $model->cnameMode = $map['CnameMode'];
        }
        if(isset($map['CnameCustomDomainName'])){
            $model->cnameCustomDomainName = $map['CnameCustomDomainName'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     * @var string
     */
    public $instanceName;

    /**
     * @description ttl
     * @var integer
     */
    public $ttl;

    /**
     * @description userDomainName
     * @var string
     */
    public $userDomainName;

    /**
     * @description lbaStrategy
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description alertGroup
     * @var string
     */
    public $alertGroup;

    /**
     * @description cnameMode
     * @var string
     */
    public $cnameMode;

    /**
     * @description cnameCustomDomainName
     * @var string
     */
    public $cnameCustomDomainName;

}
