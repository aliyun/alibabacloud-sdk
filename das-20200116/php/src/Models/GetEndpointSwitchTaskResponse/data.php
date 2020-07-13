<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetEndpointSwitchTaskResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description accountId
     *
     * @var string
     */
    public $accountId;

    /**
     * @description dbLinkId
     *
     * @var int
     */
    public $dbLinkId;

    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description oriUuid
     *
     * @var string
     */
    public $oriUuid;

    /**
     * @description uuid
     *
     * @var string
     */
    public $uuid;

    /**
     * @description errMsg
     *
     * @var string
     */
    public $errMsg;
    protected $_name = [
        'accountId' => 'AccountId',
        'dbLinkId'  => 'DbLinkId',
        'taskId'    => 'TaskId',
        'status'    => 'Status',
        'oriUuid'   => 'OriUuid',
        'uuid'      => 'Uuid',
        'errMsg'    => 'ErrMsg',
    ];

    public function validate()
    {
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('dbLinkId', $this->dbLinkId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('oriUuid', $this->oriUuid, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateRequired('errMsg', $this->errMsg, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->dbLinkId) {
            $res['DbLinkId'] = $this->dbLinkId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->oriUuid) {
            $res['OriUuid'] = $this->oriUuid;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DbLinkId'])) {
            $model->dbLinkId = $map['DbLinkId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OriUuid'])) {
            $model->oriUuid = $map['OriUuid'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        return $model;
    }
}
