<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest\tag;
use AlibabaCloud\Tea\Model;

class ListStacksRequest extends Model
{
    /**
     * @var array
     */
    public $status;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentStackId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var array
     */
    public $stackName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var bool
     */
    public $showNestedStack;

    /**
     * @var array
     */
    public $tag;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'status'          => 'Status',
        'pageSize'        => 'PageSize',
        'parentStackId'   => 'ParentStackId',
        'regionId'        => 'RegionId',
        'stackName'       => 'StackName',
        'pageNumber'      => 'PageNumber',
        'showNestedStack' => 'ShowNestedStack',
        'tag'             => 'Tag',
        'stackId'         => 'StackId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentStackId) {
            $res['ParentStackId'] = $this->parentStackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->showNestedStack) {
            $res['ShowNestedStack'] = $this->showNestedStack;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStacksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentStackId'])) {
            $model->parentStackId = $map['ParentStackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackName'])) {
            if (!empty($map['StackName'])) {
                $model->stackName = $map['StackName'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ShowNestedStack'])) {
            $model->showNestedStack = $map['ShowNestedStack'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
