<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetDefaultAITemplateResponse\templateInfo;

class GetDefaultAITemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'templateInfo' => 'TemplateInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateInfo', $this->templateInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TemplateInfo'] = null !== $this->templateInfo ? $this->templateInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetDefaultAITemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TemplateInfo'])){
            $model->templateInfo = templateInfo::fromMap($map['TemplateInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.templateInfo
     * @var templateInfo
     */
    public $templateInfo;

}
