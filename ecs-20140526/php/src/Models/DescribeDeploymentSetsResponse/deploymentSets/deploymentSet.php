<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponse\deploymentSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponse\deploymentSets\deploymentSet\instanceIds;
use AlibabaCloud\Tea\Model;

class deploymentSet extends Model
{
    /**
     * @description deploymentSetId
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description deploymentSetDescription
     *
     * @var string
     */
    public $deploymentSetDescription;

    /**
     * @description deploymentSetName
     *
     * @var string
     */
    public $deploymentSetName;

    /**
     * @description strategy
     *
     * @var string
     */
    public $strategy;

    /**
     * @description deploymentStrategy
     *
     * @var string
     */
    public $deploymentStrategy;

    /**
     * @description domain
     *
     * @var string
     */
    public $domain;

    /**
     * @description granularity
     *
     * @var string
     */
    public $granularity;

    /**
     * @description instanceAmount
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description instanceIds
     *
     * @var instanceIds
     */
    public $instanceIds;
    protected $_name = [
        'deploymentSetId'          => 'DeploymentSetId',
        'deploymentSetDescription' => 'DeploymentSetDescription',
        'deploymentSetName'        => 'DeploymentSetName',
        'strategy'                 => 'Strategy',
        'deploymentStrategy'       => 'DeploymentStrategy',
        'domain'                   => 'Domain',
        'granularity'              => 'Granularity',
        'instanceAmount'           => 'InstanceAmount',
        'creationTime'             => 'CreationTime',
        'instanceIds'              => 'InstanceIds',
    ];

    public function validate()
    {
        Model::validateRequired('deploymentSetId', $this->deploymentSetId, true);
        Model::validateRequired('deploymentSetDescription', $this->deploymentSetDescription, true);
        Model::validateRequired('deploymentSetName', $this->deploymentSetName, true);
        Model::validateRequired('strategy', $this->strategy, true);
        Model::validateRequired('deploymentStrategy', $this->deploymentStrategy, true);
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('granularity', $this->granularity, true);
        Model::validateRequired('instanceAmount', $this->instanceAmount, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('instanceIds', $this->instanceIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->deploymentSetDescription) {
            $res['DeploymentSetDescription'] = $this->deploymentSetDescription;
        }
        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->deploymentStrategy) {
            $res['DeploymentStrategy'] = $this->deploymentStrategy;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['DeploymentSetDescription'])) {
            $model->deploymentSetDescription = $map['DeploymentSetDescription'];
        }
        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['DeploymentStrategy'])) {
            $model->deploymentStrategy = $map['DeploymentStrategy'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }

        return $model;
    }
}
