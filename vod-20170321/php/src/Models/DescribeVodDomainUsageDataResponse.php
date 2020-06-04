<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataResponse\usageDataPerInterval;

class DescribeVodDomainUsageDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'type' => 'Type',
        'area' => 'Area',
        'dataInterval' => 'DataInterval',
        'usageDataPerInterval' => 'UsageDataPerInterval',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('area', $this->area, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('usageDataPerInterval', $this->usageDataPerInterval, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['Type'] = $this->type;
        $res['Area'] = $this->area;
        $res['DataInterval'] = $this->dataInterval;
        $res['UsageDataPerInterval'] = null !== $this->usageDataPerInterval ? $this->usageDataPerInterval->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainUsageDataResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Area'])){
            $model->area = $map['Area'];
        }
        if(isset($map['DataInterval'])){
            $model->dataInterval = $map['DataInterval'];
        }
        if(isset($map['UsageDataPerInterval'])){
            $model->usageDataPerInterval = usageDataPerInterval::fromMap($map['UsageDataPerInterval']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.domainName
     * @var string
     */
    public $domainName;

    /**
     * @description data.startTime
     * @var string
     */
    public $startTime;

    /**
     * @description data.endTime
     * @var string
     */
    public $endTime;

    /**
     * @description data.field
     * @var string
     */
    public $type;

    /**
     * @description data.area
     * @var string
     */
    public $area;

    /**
     * @description data.content.interval
     * @var string
     */
    public $dataInterval;

    /**
     * @description data.content.data
     * @var usageDataPerInterval
     */
    public $usageDataPerInterval;

}
