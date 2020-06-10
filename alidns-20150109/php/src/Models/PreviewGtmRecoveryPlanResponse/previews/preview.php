<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews;

use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview\switchInfos;
use AlibabaCloud\Tea\Model;

class preview extends Model
{
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
    public $name;

    /**
     * @description userDomainName
     *
     * @var string
     */
    public $userDomainName;

    /**
     * @description switchInfos
     *
     * @var switchInfos
     */
    public $switchInfos;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'name'           => 'Name',
        'userDomainName' => 'UserDomainName',
        'switchInfos'    => 'SwitchInfos',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('userDomainName', $this->userDomainName, true);
        Model::validateRequired('switchInfos', $this->switchInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->switchInfos) {
            $res['SwitchInfos'] = null !== $this->switchInfos ? $this->switchInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preview
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['SwitchInfos'])) {
            $model->switchInfos = switchInfos::fromMap($map['SwitchInfos']);
        }

        return $model;
    }
}
