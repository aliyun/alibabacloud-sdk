<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.resultDTO
     *
     * @var mediaAuditResult
     */
    public $mediaAuditResult;
    protected $_name = [
        'requestId'        => 'RequestId',
        'mediaAuditResult' => 'MediaAuditResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaAuditResult', $this->mediaAuditResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaAuditResult) {
            $res['MediaAuditResult'] = null !== $this->mediaAuditResult ? $this->mediaAuditResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditResultResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaAuditResult'])) {
            $model->mediaAuditResult = mediaAuditResult::fromMap($map['MediaAuditResult']);
        }

        return $model;
    }
}
