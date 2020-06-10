<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftResponse\propertyDifferences;
use AlibabaCloud\Tea\Model;

class DetectStackResourceDriftResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description DriftDetectionTime
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description ResourceDriftStatus
     *
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description ResourceType
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description PhysicalResourceId
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description LogicalResourceId
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description ActualProperties
     *
     * @var string
     */
    public $actualProperties;

    /**
     * @description ExpectedProperties
     *
     * @var string
     */
    public $expectedProperties;

    /**
     * @description PropertyDifferences
     *
     * @var array
     */
    public $propertyDifferences;
    protected $_name = [
        'requestId'           => 'RequestId',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'stackId'             => 'StackId',
        'resourceType'        => 'ResourceType',
        'physicalResourceId'  => 'PhysicalResourceId',
        'logicalResourceId'   => 'LogicalResourceId',
        'actualProperties'    => 'ActualProperties',
        'expectedProperties'  => 'ExpectedProperties',
        'propertyDifferences' => 'PropertyDifferences',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('driftDetectionTime', $this->driftDetectionTime, true);
        Model::validateRequired('resourceDriftStatus', $this->resourceDriftStatus, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('physicalResourceId', $this->physicalResourceId, true);
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
        Model::validateRequired('actualProperties', $this->actualProperties, true);
        Model::validateRequired('expectedProperties', $this->expectedProperties, true);
        Model::validateRequired('propertyDifferences', $this->propertyDifferences, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->actualProperties) {
            $res['ActualProperties'] = $this->actualProperties;
        }
        if (null !== $this->expectedProperties) {
            $res['ExpectedProperties'] = $this->expectedProperties;
        }
        if (null !== $this->propertyDifferences) {
            $res['PropertyDifferences'] = [];
            if (null !== $this->propertyDifferences && \is_array($this->propertyDifferences)) {
                $n = 0;
                foreach ($this->propertyDifferences as $item) {
                    $res['PropertyDifferences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectStackResourceDriftResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['ResourceDriftStatus'])) {
            $model->resourceDriftStatus = $map['ResourceDriftStatus'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['ActualProperties'])) {
            $model->actualProperties = $map['ActualProperties'];
        }
        if (isset($map['ExpectedProperties'])) {
            $model->expectedProperties = $map['ExpectedProperties'];
        }
        if (isset($map['PropertyDifferences'])) {
            if (!empty($map['PropertyDifferences'])) {
                $model->propertyDifferences = [];
                $n                          = 0;
                foreach ($map['PropertyDifferences'] as $item) {
                    $model->propertyDifferences[$n++] = null !== $item ? propertyDifferences::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
