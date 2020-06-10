<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data;
use AlibabaCloud\Tea\Model;

class GetAIMediaAuditJobResponse extends Model
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
     * @var mediaAuditJob
     */
    public $mediaAuditJob;
    protected $_name = [
        'requestId'     => 'RequestId',
        'mediaAuditJob' => 'MediaAuditJob',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaAuditJob', $this->mediaAuditJob, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaAuditJob) {
            $res['MediaAuditJob'] = null !== $this->mediaAuditJob ? $this->mediaAuditJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAIMediaAuditJobResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaAuditJob'])) {
            $model->mediaAuditJob = mediaAuditJob::fromMap($map['MediaAuditJob']);
        }

        return $model;
    }
}
