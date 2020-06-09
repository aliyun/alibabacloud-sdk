<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeResponse\items;

use AlibabaCloud\Tea\Model;

class autoRenewAttribute extends Model {
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'regionId' => 'RegionId',
        'autoRenewEnabled' => 'AutoRenewEnabled',
        'duration' => 'Duration',
        'periodUnit' => 'PeriodUnit',
        'renewalStatus' => 'RenewalStatus',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('autoRenewEnabled', $this->autoRenewEnabled, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('periodUnit', $this->periodUnit, true);
        Model::validateRequired('renewalStatus', $this->renewalStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['DBClusterId'] = $this->DBClusterId;
        $res['RegionId'] = $this->regionId;
        $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        $res['Duration'] = $this->duration;
        $res['PeriodUnit'] = $this->periodUnit;
        $res['RenewalStatus'] = $this->renewalStatus;
        return $res;
    }
    /**
     * @param array $map
     * @return autoRenewAttribute
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['AutoRenewEnabled'])){
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['PeriodUnit'])){
            $model->periodUnit = $map['PeriodUnit'];
        }
        if(isset($map['RenewalStatus'])){
            $model->renewalStatus = $map['RenewalStatus'];
        }
        return $model;
    }
    /**
     * @description dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description autoRenewal
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @description duration
     * @var integer
     */
    public $duration;

    /**
     * @description periodUnit
     * @var string
     */
    public $periodUnit;

    /**
     * @description renewalStatus
     * @var string
     */
    public $renewalStatus;

}
