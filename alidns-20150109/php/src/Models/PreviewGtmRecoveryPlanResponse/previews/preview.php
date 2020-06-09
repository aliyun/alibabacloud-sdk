<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview\switchInfos;

class preview extends Model {
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'userDomainName' => 'UserDomainName',
        'switchInfos' => 'SwitchInfos',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('userDomainName', $this->userDomainName, true);
        Model::validateRequired('switchInfos', $this->switchInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['InstanceId'] = $this->instanceId;
        $res['Name'] = $this->name;
        $res['UserDomainName'] = $this->userDomainName;
        $res['SwitchInfos'] = null !== $this->switchInfos ? $this->switchInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return preview
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['UserDomainName'])){
            $model->userDomainName = $map['UserDomainName'];
        }
        if(isset($map['SwitchInfos'])){
            $model->switchInfos = switchInfos::fromMap($map['SwitchInfos']);
        }
        return $model;
    }
    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     * @var string
     */
    public $name;

    /**
     * @description userDomainName
     * @var string
     */
    public $userDomainName;

    /**
     * @description switchInfos
     * @var switchInfos
     */
    public $switchInfos;

}
