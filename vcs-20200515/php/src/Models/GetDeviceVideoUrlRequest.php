<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceVideoUrlRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'gbId' => 'GbId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
    ];
    public function validate() {
        Model::validateRequired('corpId', $this->corpId, true);
    }
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['GbId'] = $this->gbId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        return $res;
    }
    /**
     * @param array $map
     * @return GetDeviceVideoUrlRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['GbId'])){
            $model->gbId = $map['GbId'];
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
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description gbId
     * @var string
     */
    public $gbId;

    /**
     * @description startTimestamp
     * @var integer
     */
    public $startTime;

    /**
     * @description endTimestamp
     * @var integer
     */
    public $endTime;

}
