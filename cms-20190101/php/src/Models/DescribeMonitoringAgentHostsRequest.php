<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentHostsRequest extends Model
{
    /**
     * @description keyWord
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description hostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description instanceIds
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description serialNumbers
     *
     * @var string
     */
    public $serialNumbers;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description instanceRegionId
     *
     * @var string
     */
    public $instanceRegionId;
    protected $_name = [
        'keyWord'          => 'KeyWord',
        'hostName'         => 'HostName',
        'instanceIds'      => 'InstanceIds',
        'serialNumbers'    => 'SerialNumbers',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'instanceRegionId' => 'InstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->serialNumbers) {
            $res['SerialNumbers'] = $this->serialNumbers;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['SerialNumbers'])) {
            $model->serialNumbers = $map['SerialNumbers'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }

        return $model;
    }
}
