<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway;

use AlibabaCloud\Tea\Model;

class snatTableIds extends Model
{
    /**
     * @description SnatTableId
     *
     * @var array
     */
    public $snatTableId;
    protected $_name = [
        'snatTableId' => 'SnatTableId',
    ];

    public function validate()
    {
        Model::validateRequired('snatTableId', $this->snatTableId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatTableId'])) {
            if (!empty($map['SnatTableId'])) {
                $model->snatTableId = $map['SnatTableId'];
            }
        }

        return $model;
    }
}
