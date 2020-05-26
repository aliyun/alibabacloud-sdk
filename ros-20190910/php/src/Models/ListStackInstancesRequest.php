<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackInstancesRequest extends Model
{
    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description StackGroupName
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description StackInstanceAccountId
     *
     * @var string
     */
    public $stackInstanceAccountId;

    /**
     * @description StackInstanceRegionId
     *
     * @var string
     */
    public $stackInstanceRegionId;

    /**
     * @description PageSize
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
        'regionId'               => 'RegionId',
        'stackGroupName'         => 'StackGroupName',
        'stackInstanceAccountId' => 'StackInstanceAccountId',
        'stackInstanceRegionId'  => 'StackInstanceRegionId',
        'pageSize'               => 'PageSize',
        'pageNumber'             => 'PageNumber',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
    }

    public function toMap()
    {
        $res                           = [];
        $res['RegionId']               = $this->regionId;
        $res['StackGroupName']         = $this->stackGroupName;
        $res['StackInstanceAccountId'] = $this->stackInstanceAccountId;
        $res['StackInstanceRegionId']  = $this->stackInstanceRegionId;
        $res['PageSize']               = $this->pageSize;
        $res['PageNumber']             = $this->pageNumber;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackInstanceAccountId'])) {
            $model->stackInstanceAccountId = $map['StackInstanceAccountId'];
        }
        if (isset($map['StackInstanceRegionId'])) {
            $model->stackInstanceRegionId = $map['StackInstanceRegionId'];
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
