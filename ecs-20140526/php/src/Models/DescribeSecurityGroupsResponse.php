<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponse\securityGroups;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.total
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description data.pageNo
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description data.pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description data.data
     *
     * @var securityGroups
     */
    public $securityGroups;
    protected $_name = [
        'requestId'      => 'RequestId',
        'regionId'       => 'RegionId',
        'totalCount'     => 'TotalCount',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'securityGroups' => 'SecurityGroups',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('securityGroups', $this->securityGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = null !== $this->securityGroups ? $this->securityGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityGroups'])) {
            $model->securityGroups = securityGroups::fromMap($map['SecurityGroups']);
        }

        return $model;
    }
}
