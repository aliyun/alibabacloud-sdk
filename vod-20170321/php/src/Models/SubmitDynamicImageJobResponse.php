<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobResponse\dynamicImageJob;
use AlibabaCloud\Tea\Model;

class SubmitDynamicImageJobResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.submitDynamicJobDTO
     *
     * @var dynamicImageJob
     */
    public $dynamicImageJob;
    protected $_name = [
        'requestId'       => 'RequestId',
        'dynamicImageJob' => 'DynamicImageJob',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dynamicImageJob', $this->dynamicImageJob, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dynamicImageJob) {
            $res['DynamicImageJob'] = null !== $this->dynamicImageJob ? $this->dynamicImageJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDynamicImageJobResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DynamicImageJob'])) {
            $model->dynamicImageJob = dynamicImageJob::fromMap($map['DynamicImageJob']);
        }

        return $model;
    }
}
