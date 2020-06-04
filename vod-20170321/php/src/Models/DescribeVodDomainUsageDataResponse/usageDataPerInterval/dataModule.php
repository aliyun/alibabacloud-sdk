<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataResponse\usageDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model {
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
    ];
    public function validate() {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('value', $this->value, true);
    }
    public function toMap() {
        $res = [];
        $res['TimeStamp'] = $this->timeStamp;
        $res['Value'] = $this->value;
        return $res;
    }
    /**
     * @param array $map
     * @return dataModule
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        return $model;
    }
    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

    /**
     * @description value
     * @var string
     */
    public $value;

}
