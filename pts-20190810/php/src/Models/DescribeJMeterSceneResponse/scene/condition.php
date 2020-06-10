<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneResponse\scene;

use AlibabaCloud\Tea\Model;

class condition extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description isp
     *
     * @var string
     */
    public $isp;

    /**
     * @description amount
     *
     * @var int
     */
    public $amount;
    protected $_name = [
        'region' => 'Region',
        'isp'    => 'Isp',
        'amount' => 'Amount',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('isp', $this->isp, true);
        Model::validateRequired('amount', $this->amount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        return $model;
    }
}
