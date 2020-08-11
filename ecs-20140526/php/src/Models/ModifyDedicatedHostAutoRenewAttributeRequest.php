<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostAutoRenewAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'dedicatedHostIds' => 'DedicatedHostIds',
        'regionId'         => 'RegionId',
        'duration'         => 'Duration',
        'periodUnit'       => 'PeriodUnit',
        'autoRenew'        => 'AutoRenew',
        'renewalStatus'    => 'RenewalStatus',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostIds', $this->dedicatedHostIds, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = $this->dedicatedHostIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedHostAutoRenewAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostIds'])) {
            $model->dedicatedHostIds = $map['DedicatedHostIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
