<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description identifier
     *
     * @var string
     */
    public $identifier;

    /**
     * @description cluster
     *
     * @var string
     */
    public $cluster;

    /**
     * @description bizExtKey
     *
     * @var string
     */
    public $bizExtKey;

    /**
     * @description enableKp
     *
     * @var bool
     */
    public $enableKp;

    /**
     * @description updateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description type
     *
     * @var string
     */
    public $resourceGroupType;

    /**
     * @description mode
     *
     * @var string
     */
    public $mode;

    /**
     * @description sequence
     *
     * @var int
     */
    public $sequence;

    /**
     * @description isDefault
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description status
     *
     * @var int
     */
    public $status;

    /**
     * @description specs
     *
     * @var array
     */
    public $specs;
    protected $_name = [
        'identifier'        => 'Identifier',
        'cluster'           => 'Cluster',
        'bizExtKey'         => 'BizExtKey',
        'enableKp'          => 'EnableKp',
        'updateTime'        => 'UpdateTime',
        'resourceGroupType' => 'ResourceGroupType',
        'mode'              => 'Mode',
        'sequence'          => 'Sequence',
        'isDefault'         => 'IsDefault',
        'createTime'        => 'CreateTime',
        'name'              => 'Name',
        'tenantId'          => 'TenantId',
        'id'                => 'Id',
        'status'            => 'Status',
        'specs'             => 'Specs',
    ];

    public function validate()
    {
        Model::validateRequired('identifier', $this->identifier, true);
        Model::validateRequired('cluster', $this->cluster, true);
        Model::validateRequired('bizExtKey', $this->bizExtKey, true);
        Model::validateRequired('enableKp', $this->enableKp, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('resourceGroupType', $this->resourceGroupType, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('sequence', $this->sequence, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('specs', $this->specs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->bizExtKey) {
            $res['BizExtKey'] = $this->bizExtKey;
        }
        if (null !== $this->enableKp) {
            $res['EnableKp'] = $this->enableKp;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->specs) {
            $res['Specs'] = $this->specs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['BizExtKey'])) {
            $model->bizExtKey = $map['BizExtKey'];
        }
        if (isset($map['EnableKp'])) {
            $model->enableKp = $map['EnableKp'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Specs'])) {
            $model->specs = $map['Specs'];
        }

        return $model;
    }
}
