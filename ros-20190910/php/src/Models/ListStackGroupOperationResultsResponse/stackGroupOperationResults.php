<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponse;

use AlibabaCloud\Tea\Model;

class stackGroupOperationResults extends Model
{
    /**
     * @description AccountId
     *
     * @var string
     */
    public $accountId;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Status
     *
     * @var string
     */
    public $status;

    /**
     * @description StatusReason
     *
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
        $res                 = [];
        $res['AccountId']    = $this->accountId;
        $res['RegionId']     = $this->regionId;
        $res['Status']       = $this->status;
        $res['StatusReason'] = $this->statusReason;

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
