<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListChangeSetsRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var array
     */
    public $status;

    /**
     * @var array
     */
    public $changeSetName;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var array
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $changeSetId;
    protected $_name = [
        'stackId'         => 'StackId',
        'status'          => 'Status',
        'changeSetName'   => 'ChangeSetName',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'pageNumber'      => 'PageNumber',
        'executionStatus' => 'ExecutionStatus',
        'changeSetId'     => 'ChangeSetId',
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
            $res['Status'] = $this->status;
        }
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['ChangeSetName'])) {
            if (!empty($map['ChangeSetName'])) {
                $model->changeSetName = $map['ChangeSetName'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ExecutionStatus'])) {
            if (!empty($map['ExecutionStatus'])) {
                $model->executionStatus = $map['ExecutionStatus'];
            }
        }
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }

        return $model;
    }
}
