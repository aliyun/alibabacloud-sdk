<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataResponse\usageDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainUsageDataResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description data.startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description data.endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description data.field
     *
     * @var string
     */
    public $type;

    /**
     * @description data.area
     *
     * @var string
     */
    public $area;

    /**
     * @description data.content.interval
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description data.content.data
     *
     * @var usageDataPerInterval
     */
    public $usageDataPerInterval;
    protected $_name = [
        'requestId'            => 'RequestId',
        'domainName'           => 'DomainName',
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
        'type'                 => 'Type',
        'area'                 => 'Area',
        'dataInterval'         => 'DataInterval',
        'usageDataPerInterval' => 'UsageDataPerInterval',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('area', $this->area, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('usageDataPerInterval', $this->usageDataPerInterval, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->usageDataPerInterval) {
            $res['UsageDataPerInterval'] = null !== $this->usageDataPerInterval ? $this->usageDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainUsageDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['UsageDataPerInterval'])) {
            $model->usageDataPerInterval = usageDataPerInterval::fromMap($map['UsageDataPerInterval']);
        }

        return $model;
    }
}
