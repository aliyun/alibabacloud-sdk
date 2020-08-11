<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse\demands\demand\supplyInfos;

use AlibabaCloud\Tea\Model;

class supplyInfo extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $supplyStatus;

    /**
     * @var string
     */
    public $supplyStartTime;

    /**
     * @var string
     */
    public $supplyEndTime;
    protected $_name = [
        'amount'          => 'Amount',
        'supplyStatus'    => 'SupplyStatus',
        'supplyStartTime' => 'SupplyStartTime',
        'supplyEndTime'   => 'SupplyEndTime',
    ];

    public function validate()
    {
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('supplyStatus', $this->supplyStatus, true);
        Model::validateRequired('supplyStartTime', $this->supplyStartTime, true);
        Model::validateRequired('supplyEndTime', $this->supplyEndTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->supplyStatus) {
            $res['SupplyStatus'] = $this->supplyStatus;
        }
        if (null !== $this->supplyStartTime) {
            $res['SupplyStartTime'] = $this->supplyStartTime;
        }
        if (null !== $this->supplyEndTime) {
            $res['SupplyEndTime'] = $this->supplyEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['SupplyStatus'])) {
            $model->supplyStatus = $map['SupplyStatus'];
        }
        if (isset($map['SupplyStartTime'])) {
            $model->supplyStartTime = $map['SupplyStartTime'];
        }
        if (isset($map['SupplyEndTime'])) {
            $model->supplyEndTime = $map['SupplyEndTime'];
        }

        return $model;
    }
}
