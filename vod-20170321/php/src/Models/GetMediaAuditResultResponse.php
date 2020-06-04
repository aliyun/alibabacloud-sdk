<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\logoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\terrorismResult;

class GetMediaAuditResultResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaAuditResult' => 'MediaAuditResult',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaAuditResult', $this->mediaAuditResult, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaAuditResult'] = null !== $this->mediaAuditResult ? $this->mediaAuditResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMediaAuditResultResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaAuditResult'])){
            $model->mediaAuditResult = mediaAuditResult::fromMap($map['MediaAuditResult']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.resultDTO
     * @var mediaAuditResult
     */
    public $mediaAuditResult;

}
