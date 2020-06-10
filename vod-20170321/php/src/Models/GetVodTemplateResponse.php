<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponse\vodTemplateInfo;
use AlibabaCloud\Tea\Model;

class GetVodTemplateResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.vodTemplateInfo
     *
     * @var vodTemplateInfo
     */
    public $vodTemplateInfo;
    protected $_name = [
        'requestId'       => 'RequestId',
        'vodTemplateInfo' => 'VodTemplateInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('vodTemplateInfo', $this->vodTemplateInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vodTemplateInfo) {
            $res['VodTemplateInfo'] = null !== $this->vodTemplateInfo ? $this->vodTemplateInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVodTemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VodTemplateInfo'])) {
            $model->vodTemplateInfo = vodTemplateInfo::fromMap($map['VodTemplateInfo']);
        }

        return $model;
    }
}
