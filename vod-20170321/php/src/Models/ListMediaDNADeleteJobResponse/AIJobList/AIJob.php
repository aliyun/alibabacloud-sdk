<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse\AIJobList;

use AlibabaCloud\Tea\Model;

class AIJob extends Model {
    protected $_name = [
        'jobId' => 'JobId',
        'mediaId' => 'MediaId',
        'status' => 'Status',
        'code' => 'Code',
        'message' => 'Message',
        'fpDBId' => 'FpDBId',
    ];
    public function validate() {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('fpDBId', $this->fpDBId, true);
    }
    public function toMap() {
        $res = [];
        $res['JobId'] = $this->jobId;
        $res['MediaId'] = $this->mediaId;
        $res['Status'] = $this->status;
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['FpDBId'] = $this->fpDBId;
        return $res;
    }
    /**
     * @param array $map
     * @return AIJob
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        if(isset($map['FpDBId'])){
            $model->fpDBId = $map['FpDBId'];
        }
        return $model;
    }
    /**
     * @description jobId
     * @var string
     */
    public $jobId;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description state
     * @var string
     */
    public $status;

    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description message
     * @var string
     */
    public $message;

    /**
     * @description fpDBId
     * @var string
     */
    public $fpDBId;

}
