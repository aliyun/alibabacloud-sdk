<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponse;

use AlibabaCloud\Tea\Model;

class histories extends Model
{
    /**
     * @description timestamp
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description reason
     *
     * @var string
     */
    public $reason;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description auditor
     *
     * @var string
     */
    public $auditor;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'status'       => 'Status',
        'reason'       => 'Reason',
        'comment'      => 'Comment',
        'auditor'      => 'Auditor',
    ];

    public function validate()
    {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('auditor', $this->auditor, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->auditor) {
            $res['Auditor'] = $this->auditor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Auditor'])) {
            $model->auditor = $map['Auditor'];
        }

        return $model;
    }
}
