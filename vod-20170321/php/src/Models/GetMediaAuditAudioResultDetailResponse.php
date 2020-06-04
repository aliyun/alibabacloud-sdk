<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponse\mediaAuditAudioResultDetail;

class GetMediaAuditAudioResultDetailResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaAuditAudioResultDetail' => 'MediaAuditAudioResultDetail',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaAuditAudioResultDetail', $this->mediaAuditAudioResultDetail, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaAuditAudioResultDetail'] = null !== $this->mediaAuditAudioResultDetail ? $this->mediaAuditAudioResultDetail->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMediaAuditAudioResultDetailResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaAuditAudioResultDetail'])){
            $model->mediaAuditAudioResultDetail = mediaAuditAudioResultDetail::fromMap($map['MediaAuditAudioResultDetail']);
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
     * @var mediaAuditAudioResultDetail
     */
    public $mediaAuditAudioResultDetail;

}
