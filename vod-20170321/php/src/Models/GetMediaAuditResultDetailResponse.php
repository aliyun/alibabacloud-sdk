<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponse\mediaAuditResultDetail;

class GetMediaAuditResultDetailResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaAuditResultDetail' => 'MediaAuditResultDetail',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaAuditResultDetail', $this->mediaAuditResultDetail, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaAuditResultDetail'] = null !== $this->mediaAuditResultDetail ? $this->mediaAuditResultDetail->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMediaAuditResultDetailResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaAuditResultDetail'])){
            $model->mediaAuditResultDetail = mediaAuditResultDetail::fromMap($map['MediaAuditResultDetail']);
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
     * @var mediaAuditResultDetail
     */
    public $mediaAuditResultDetail;

}
