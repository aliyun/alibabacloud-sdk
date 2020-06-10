<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponse\bpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainBpsDataResponse extends Model
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
     * @description data.locName
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description data.ispName
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description data.content.interval
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description data.content.data
     *
     * @var bpsDataPerInterval
     */
    public $bpsDataPerInterval;
    protected $_name = [
        'requestId'          => 'RequestId',
        'domainName'         => 'DomainName',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'locationNameEn'     => 'LocationNameEn',
        'ispNameEn'          => 'IspNameEn',
        'dataInterval'       => 'DataInterval',
        'bpsDataPerInterval' => 'BpsDataPerInterval',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('locationNameEn', $this->locationNameEn, true);
        Model::validateRequired('ispNameEn', $this->ispNameEn, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('bpsDataPerInterval', $this->bpsDataPerInterval, true);
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
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
        }
        if (null !== $this->ispNameEn) {
            $res['IspNameEn'] = $this->ispNameEn;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->bpsDataPerInterval) {
            $res['BpsDataPerInterval'] = null !== $this->bpsDataPerInterval ? $this->bpsDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainBpsDataResponse
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
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
        }
        if (isset($map['IspNameEn'])) {
            $model->ispNameEn = $map['IspNameEn'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['BpsDataPerInterval'])) {
            $model->bpsDataPerInterval = bpsDataPerInterval::fromMap($map['BpsDataPerInterval']);
        }

        return $model;
    }
}
