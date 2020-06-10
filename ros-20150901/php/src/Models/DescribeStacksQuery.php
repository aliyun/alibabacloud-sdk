<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class DescribeStacksQuery extends Model
{
    /**
     * @description Status
     *
     * @var string
     */
    public $status;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description Id
     *
     * @var string
     */
    public $stackId;

    /**
     * @description Limit
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description PageNumber
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'status'     => 'Status',
        'name'       => 'Name',
        'stackId'    => 'StackId',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStacksQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
