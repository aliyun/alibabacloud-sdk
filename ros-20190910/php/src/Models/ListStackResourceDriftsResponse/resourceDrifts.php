<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse\resourceDrifts\propertyDifferences;
use AlibabaCloud\Tea\Model;

class resourceDrifts extends Model
{
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
        $res                        = [];
        $res['DriftDetectionTime']  = $this->driftDetectionTime;
        $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        $res['StackId']             = $this->stackId;
        $res['ResourceType']        = $this->resourceType;
        $res['PhysicalResourceId']  = $this->physicalResourceId;
        $res['LogicalResourceId']   = $this->logicalResourceId;
        $res['ActualProperties']    = $this->actualProperties;
        $res['ExpectedProperties']  = $this->expectedProperties;
        $res['PropertyDifferences'] = [];
        if (null !== $this->propertyDifferences && \is_array($this->propertyDifferences)) {
            $n = 0;
            foreach ($this->propertyDifferences as $item) {
                $res['PropertyDifferences'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDrifts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
