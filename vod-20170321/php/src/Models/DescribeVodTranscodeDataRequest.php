<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodTranscodeDataRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'region' => 'Region',
        'interval' => 'Interval',
        'storage' => 'Storage',
        'specification' => 'Specification',
    ];
    public function validate() {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['Region'] = $this->region;
        $res['Interval'] = $this->interval;
        $res['Storage'] = $this->storage;
        $res['Specification'] = $this->specification;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodTranscodeDataRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['Interval'])){
            $model->interval = $map['Interval'];
        }
        if(isset($map['Storage'])){
            $model->storage = $map['Storage'];
        }
        if(isset($map['Specification'])){
            $model->specification = $map['Specification'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description interval
     * @var string
     */
    public $interval;

    /**
     * @description inputBucket
     * @var string
     */
    public $storage;

    /**
     * @description saasSpecification
     * @var string
     */
    public $specification;

}
