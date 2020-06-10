<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponse\trafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainTrafficDataResponse extends Model
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
     * @description data.content.interval
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description data.content.data
     *
     * @var trafficDataPerInterval
     */
    public $trafficDataPerInterval;
    protected $_name = [
        'requestId'              => 'RequestId',
        'domainName'             => 'DomainName',
        'startTime'              => 'StartTime',
        'endTime'                => 'EndTime',
        'dataInterval'           => 'DataInterval',
        'trafficDataPerInterval' => 'TrafficDataPerInterval',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('trafficDataPerInterval', $this->trafficDataPerInterval, true);
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
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->trafficDataPerInterval) {
            $res['TrafficDataPerInterval'] = null !== $this->trafficDataPerInterval ? $this->trafficDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainTrafficDataResponse
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
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['TrafficDataPerInterval'])) {
            $model->trafficDataPerInterval = trafficDataPerInterval::fromMap($map['TrafficDataPerInterval']);
        }

        return $model;
    }
}
