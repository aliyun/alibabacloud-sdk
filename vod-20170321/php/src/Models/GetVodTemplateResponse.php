<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponse\vodTemplateInfo;

class GetVodTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'vodTemplateInfo' => 'VodTemplateInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('vodTemplateInfo', $this->vodTemplateInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VodTemplateInfo'] = null !== $this->vodTemplateInfo ? $this->vodTemplateInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetVodTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VodTemplateInfo'])){
            $model->vodTemplateInfo = vodTemplateInfo::fromMap($map['VodTemplateInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.vodTemplateInfo
     * @var vodTemplateInfo
     */
    public $vodTemplateInfo;

}
