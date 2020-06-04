<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse\transcodeData;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse\transcodeData\transcodeDataItem\data;

class transcodeDataItem extends Model {
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'data' => 'Data',
    ];
    public function validate() {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        $res['TimeStamp'] = $this->timeStamp;
        $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeDataItem
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        if(isset($map['Data'])){
            $model->data = data::fromMap($map['Data']);
        }
        return $model;
    }
    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

    /**
     * @description data
     * @var data
     */
    public $data;

}
