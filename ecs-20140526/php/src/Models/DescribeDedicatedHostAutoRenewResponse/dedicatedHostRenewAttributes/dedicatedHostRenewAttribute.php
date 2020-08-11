<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponse\dedicatedHostRenewAttributes;

use AlibabaCloud\Tea\Model;

class dedicatedHostRenewAttribute extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'dedicatedHostId'  => 'DedicatedHostId',
        'autoRenewEnabled' => 'AutoRenewEnabled',
        'duration'         => 'Duration',
        'periodUnit'       => 'PeriodUnit',
        'renewalStatus'    => 'RenewalStatus',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
        Model::validateRequired('autoRenewEnabled', $this->autoRenewEnabled, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('periodUnit', $this->periodUnit, true);
        Model::validateRequired('renewalStatus', $this->renewalStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostRenewAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
