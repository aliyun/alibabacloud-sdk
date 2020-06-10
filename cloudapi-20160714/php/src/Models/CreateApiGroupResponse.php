<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiGroupResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description data.groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description data.subDomain
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description data.description
     *
     * @var string
     */
    public $description;

    /**
     * @description data.instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description data.instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description tagStatus
     *
     * @var bool
     */
    public $tagStatus;
    protected $_name = [
        'requestId'    => 'RequestId',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'subDomain'    => 'SubDomain',
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'tagStatus'    => 'TagStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('tagStatus', $this->tagStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }

        return $model;
    }
}
