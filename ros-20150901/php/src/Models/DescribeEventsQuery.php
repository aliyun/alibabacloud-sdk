<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventsQuery extends Model
{
    /**
     * @description ResourceStatus
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description ResourceName
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description ResourceType
     *
     * @var string
     */
    public $resourceType;

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
        'resourceStatus' => 'ResourceStatus',
        'resourceName'   => 'ResourceName',
        'resourceType'   => 'ResourceType',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                   = [];
        $res['ResourceStatus'] = $this->resourceStatus;
        $res['ResourceName']   = $this->resourceName;
        $res['ResourceType']   = $this->resourceType;
        $res['PageSize']       = $this->pageSize;
        $res['PageNumber']     = $this->pageNumber;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
