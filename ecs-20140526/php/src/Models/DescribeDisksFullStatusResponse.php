<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet;
use AlibabaCloud\Tea\Model;

class DescribeDisksFullStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var diskFullStatusSet
     */
    public $diskFullStatusSet;
    protected $_name = [
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'diskFullStatusSet' => 'DiskFullStatusSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('diskFullStatusSet', $this->diskFullStatusSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->diskFullStatusSet) {
            $res['DiskFullStatusSet'] = null !== $this->diskFullStatusSet ? $this->diskFullStatusSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDisksFullStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['DiskFullStatusSet'])) {
            $model->diskFullStatusSet = diskFullStatusSet::fromMap($map['DiskFullStatusSet']);
        }

        return $model;
    }
}
