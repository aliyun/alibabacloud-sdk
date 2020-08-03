<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponse;

use AlibabaCloud\Tea\Model;

class stackGroupOperationResults extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'accountId'    => 'AccountId',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
        'statusReason' => 'StatusReason',
    ];

    public function validate()
    {
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupOperationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
