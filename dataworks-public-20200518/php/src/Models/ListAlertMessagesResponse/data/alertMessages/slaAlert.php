<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data\alertMessages;

use AlibabaCloud\Tea\Model;

class slaAlert extends Model
{
    /**
     * @description baselineId
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description baselineName
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description baselineOwner
     *
     * @var string
     */
    public $baselineOwner;

    /**
     * @description bizdate
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description inGroupId
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'baselineId'    => 'BaselineId',
        'baselineName'  => 'BaselineName',
        'baselineOwner' => 'BaselineOwner',
        'bizdate'       => 'Bizdate',
        'inGroupId'     => 'InGroupId',
        'projectId'     => 'ProjectId',
        'status'        => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('baselineName', $this->baselineName, true);
        Model::validateRequired('baselineOwner', $this->baselineOwner, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('inGroupId', $this->inGroupId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineOwner) {
            $res['BaselineOwner'] = $this->baselineOwner;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaAlert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineOwner'])) {
            $model->baselineOwner = $map['BaselineOwner'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
