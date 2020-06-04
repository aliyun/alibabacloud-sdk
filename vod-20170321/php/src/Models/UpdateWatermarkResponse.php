<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkResponse\watermarkInfo;

class UpdateWatermarkResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'watermarkInfo' => 'WatermarkInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('watermarkInfo', $this->watermarkInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['WatermarkInfo'] = null !== $this->watermarkInfo ? $this->watermarkInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateWatermarkResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['WatermarkInfo'])){
            $model->watermarkInfo = watermarkInfo::fromMap($map['WatermarkInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.watermarkDto
     * @var watermarkInfo
     */
    public $watermarkInfo;

}
