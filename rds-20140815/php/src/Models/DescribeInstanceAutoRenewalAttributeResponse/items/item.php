<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeResponse\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description instanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description region
     *
     * @var string
     */
    public $regionId;

    /**
     * @description renewalDuration
     *
     * @var int
     */
    public $duration;

    /**
     * @description resourceStatus
     *
     * @var string
     */
    public $status;

    /**
     * @description autoRenewal
     *
     * @var string
     */
    public $autoRenew;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'regionId'     => 'RegionId',
        'duration'     => 'Duration',
        'status'       => 'Status',
        'autoRenew'    => 'AutoRenew',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('autoRenew', $this->autoRenew, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        return $model;
    }
}
