<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse\demands\demand;
use AlibabaCloud\Tea\Model;

class demands extends Model
{
    /**
     * @description Demand
     *
     * @var array
     */
    public $demand;
    protected $_name = [
        'demand' => 'Demand',
    ];

    public function validate()
    {
        Model::validateRequired('demand', $this->demand, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demand) {
            $res['Demand'] = [];
            if (null !== $this->demand && \is_array($this->demand)) {
                $n = 0;
                foreach ($this->demand as $item) {
                    $res['Demand'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Demand'])) {
            if (!empty($map['Demand'])) {
                $model->demand = [];
                $n             = 0;
                foreach ($map['Demand'] as $item) {
                    $model->demand[$n++] = null !== $item ? demand::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
