<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results\box\positions;
use AlibabaCloud\Tea\Model;

class box extends Model
{
    /**
     * @description confident
     *
     * @var float
     */
    public $confident;

    /**
     * @description positions
     *
     * @var array
     */
    public $positions;
    protected $_name = [
        'confident' => 'Confident',
        'positions' => 'Positions',
    ];

    public function validate()
    {
        Model::validateRequired('confident', $this->confident, true);
        Model::validateRequired('positions', $this->positions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confident) {
            $res['Confident'] = $this->confident;
        }
        if (null !== $this->positions) {
            $res['Positions'] = [];
            if (null !== $this->positions && \is_array($this->positions)) {
                $n = 0;
                foreach ($this->positions as $item) {
                    $res['Positions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return box
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confident'])) {
            $model->confident = $map['Confident'];
        }
        if (isset($map['Positions'])) {
            if (!empty($map['Positions'])) {
                $model->positions = [];
                $n                = 0;
                foreach ($map['Positions'] as $item) {
                    $model->positions[$n++] = null !== $item ? positions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
