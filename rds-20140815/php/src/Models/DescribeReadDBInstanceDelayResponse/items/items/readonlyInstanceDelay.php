<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items\readonlyInstanceDelay\readonlyInstanceDelay;
use AlibabaCloud\Tea\Model;

class readonlyInstanceDelay extends Model
{
    /**
     * @description ReadonlyInstanceDelay
     *
     * @var array
     */
    public $readonlyInstanceDelay;
    protected $_name = [
        'readonlyInstanceDelay' => 'ReadonlyInstanceDelay',
    ];

    public function validate()
    {
        Model::validateRequired('readonlyInstanceDelay', $this->readonlyInstanceDelay, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readonlyInstanceDelay) {
            $res['ReadonlyInstanceDelay'] = [];
            if (null !== $this->readonlyInstanceDelay && \is_array($this->readonlyInstanceDelay)) {
                $n = 0;
                foreach ($this->readonlyInstanceDelay as $item) {
                    $res['ReadonlyInstanceDelay'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readonlyInstanceDelay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadonlyInstanceDelay'])) {
            if (!empty($map['ReadonlyInstanceDelay'])) {
                $model->readonlyInstanceDelay = [];
                $n                            = 0;
                foreach ($map['ReadonlyInstanceDelay'] as $item) {
                    $model->readonlyInstanceDelay[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
