<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponse\userPlayStatisAvgs;

use AlibabaCloud\Tea\Model;

class userPlayStatisAvg extends Model {
    protected $_name = [
        'date' => 'Date',
        'avgPlayDuration' => 'AvgPlayDuration',
        'avgPlayCount' => 'AvgPlayCount',
    ];
    public function validate() {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('avgPlayDuration', $this->avgPlayDuration, true);
        Model::validateRequired('avgPlayCount', $this->avgPlayCount, true);
    }
    public function toMap() {
        $res = [];
        $res['Date'] = $this->date;
        $res['AvgPlayDuration'] = $this->avgPlayDuration;
        $res['AvgPlayCount'] = $this->avgPlayCount;
        return $res;
    }
    /**
     * @param array $map
     * @return userPlayStatisAvg
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Date'])){
            $model->date = $map['Date'];
        }
        if(isset($map['AvgPlayDuration'])){
            $model->avgPlayDuration = $map['AvgPlayDuration'];
        }
        if(isset($map['AvgPlayCount'])){
            $model->avgPlayCount = $map['AvgPlayCount'];
        }
        return $model;
    }
    /**
     * @description date
     * @var string
     */
    public $date;

    /**
     * @description avgPlayTime
     * @var string
     */
    public $avgPlayDuration;

    /**
     * @description avgPlayCount
     * @var string
     */
    public $avgPlayCount;

}
