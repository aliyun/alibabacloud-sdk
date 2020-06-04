<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIMediaAuditJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaId' => 'MediaId',
        'jobId' => 'JobId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('jobId', $this->jobId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaId'] = $this->mediaId;
        $res['JobId'] = $this->jobId;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIMediaAuditJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description data.jobId
     * @var string
     */
    public $jobId;

}
