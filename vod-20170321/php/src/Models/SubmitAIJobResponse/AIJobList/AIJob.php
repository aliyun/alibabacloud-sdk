<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponse\AIJobList;

use AlibabaCloud\Tea\Model;

class AIJob extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description data
     *
     * @var string
     */
    public $data;
    protected $_name = [
        'jobId'        => 'JobId',
        'type'         => 'Type',
        'mediaId'      => 'MediaId',
        'status'       => 'Status',
        'code'         => 'Code',
        'message'      => 'Message',
        'creationTime' => 'CreationTime',
        'data'         => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
