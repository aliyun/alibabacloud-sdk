<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse\demands\demand;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse\demands\demand\supplyInfos\supplyInfo;
use AlibabaCloud\Tea\Model;

class supplyInfos extends Model
{
    /**
     * @description SupplyInfo
     *
     * @var array
     */
    public $supplyInfo;
    protected $_name = [
        'supplyInfo' => 'SupplyInfo',
    ];

    public function validate()
    {
        Model::validateRequired('supplyInfo', $this->supplyInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supplyInfo) {
            $res['SupplyInfo'] = [];
            if (null !== $this->supplyInfo && \is_array($this->supplyInfo)) {
                $n = 0;
                foreach ($this->supplyInfo as $item) {
                    $res['SupplyInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplyInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupplyInfo'])) {
            if (!empty($map['SupplyInfo'])) {
                $model->supplyInfo = [];
                $n                 = 0;
                foreach ($map['SupplyInfo'] as $item) {
                    $model->supplyInfo[$n++] = null !== $item ? supplyInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
