<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostsChargeTypeRequest extends Model
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
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $dedicatedHostChargeType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $detailFee;
    protected $_name = [
        'dedicatedHostIds'        => 'DedicatedHostIds',
        'regionId'                => 'RegionId',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'dryRun'                  => 'DryRun',
        'autoPay'                 => 'AutoPay',
        'dedicatedHostChargeType' => 'DedicatedHostChargeType',
        'clientToken'             => 'ClientToken',
        'detailFee'               => 'DetailFee',
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
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->dedicatedHostChargeType) {
            $res['DedicatedHostChargeType'] = $this->dedicatedHostChargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->detailFee) {
            $res['DetailFee'] = $this->detailFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedHostsChargeTypeRequest
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
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['DedicatedHostChargeType'])) {
            $model->dedicatedHostChargeType = $map['DedicatedHostChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DetailFee'])) {
            $model->detailFee = $map['DetailFee'];
        }

        return $model;
    }
}
