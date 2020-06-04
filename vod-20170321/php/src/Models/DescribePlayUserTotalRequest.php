<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribePlayUserTotalRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
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
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePlayUserTotalRequest
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

}
