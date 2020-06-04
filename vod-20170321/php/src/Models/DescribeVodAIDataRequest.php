<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodAIDataRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'region' => 'Region',
        'AIType' => 'AIType',
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
        $res['AIType'] = $this->AIType;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodAIDataRequest
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
        if(isset($map['AIType'])){
            $model->AIType = $map['AIType'];
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
     * @description aiType
     * @var string
     */
    public $AIType;

}
