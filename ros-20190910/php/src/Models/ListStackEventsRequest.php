<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackEventsRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description Status
     *
     * @var array
     */
    public $status;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description ResourceType
     *
     * @var array
     */
    public $resourceType;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description PageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description LogicalResourceId
     *
     * @var array
     */
    public $logicalResourceId;
    protected $_name = [
        'stackId'           => 'StackId',
        'status'            => 'Status',
        'pageSize'          => 'PageSize',
        'resourceType'      => 'ResourceType',
        'regionId'          => 'RegionId',
        'pageNumber'        => 'PageNumber',
        'logicalResourceId' => 'LogicalResourceId',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->status) {
            $res['Status'] = [];
            if (null !== $this->status) {
                $res['Status'] = $this->status;
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = [];
            if (null !== $this->resourceType) {
                $res['ResourceType'] = $this->resourceType;
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = [];
            if (null !== $this->logicalResourceId) {
                $res['LogicalResourceId'] = $this->logicalResourceId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $model->status = $map['Status'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceType'])) {
            if (!empty($map['ResourceType'])) {
                $model->resourceType = [];
                $model->resourceType = $map['ResourceType'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['LogicalResourceId'])) {
            if (!empty($map['LogicalResourceId'])) {
                $model->logicalResourceId = [];
                $model->logicalResourceId = $map['LogicalResourceId'];
            }
        }

        return $model;
    }
}
