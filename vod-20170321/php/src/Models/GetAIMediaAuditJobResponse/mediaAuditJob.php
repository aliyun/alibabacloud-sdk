<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\terrorismResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\logoResult;

class mediaAuditJob extends Model {
    protected $_name = [
        'jobId' => 'JobId',
        'mediaId' => 'MediaId',
        'type' => 'Type',
        'status' => 'Status',
        'code' => 'Code',
        'message' => 'Message',
        'creationTime' => 'CreationTime',
        'completeTime' => 'CompleteTime',
        'data' => 'Data',
    ];
    public function validate() {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('completeTime', $this->completeTime, true);
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        $res['JobId'] = $this->jobId;
        $res['MediaId'] = $this->mediaId;
        $res['Type'] = $this->type;
        $res['Status'] = $this->status;
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['CreationTime'] = $this->creationTime;
        $res['CompleteTime'] = $this->completeTime;
        $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return mediaAuditJob
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
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
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['CompleteTime'])){
            $model->completeTime = $map['CompleteTime'];
        }
        if(isset($map['Data'])){
            $model->data = data::fromMap($map['Data']);
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $jobId;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description status
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
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description completeTime
     * @var string
     */
    public $completeTime;

    /**
     * @description data
     * @var data
     */
    public $data;

}
