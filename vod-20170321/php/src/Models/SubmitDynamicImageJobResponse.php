<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobResponse\dynamicImageJob;

class SubmitDynamicImageJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'dynamicImageJob' => 'DynamicImageJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dynamicImageJob', $this->dynamicImageJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DynamicImageJob'] = null !== $this->dynamicImageJob ? $this->dynamicImageJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitDynamicImageJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DynamicImageJob'])){
            $model->dynamicImageJob = dynamicImageJob::fromMap($map['DynamicImageJob']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.submitDynamicJobDTO
     * @var dynamicImageJob
     */
    public $dynamicImageJob;

}
