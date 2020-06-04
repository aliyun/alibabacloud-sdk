<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponse\preprocessJobs;

class SubmitPreprocessJobsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'preprocessJobs' => 'PreprocessJobs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('preprocessJobs', $this->preprocessJobs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PreprocessJobs'] = null !== $this->preprocessJobs ? $this->preprocessJobs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitPreprocessJobsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PreprocessJobs'])){
            $model->preprocessJobs = preprocessJobs::fromMap($map['PreprocessJobs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.transcodeJobs
     * @var preprocessJobs
     */
    public $preprocessJobs;

}
