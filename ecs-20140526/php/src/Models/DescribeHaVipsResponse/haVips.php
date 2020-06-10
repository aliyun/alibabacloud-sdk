<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse\haVips\haVip;
use AlibabaCloud\Tea\Model;

class haVips extends Model
{
    /**
     * @description HaVip
     *
     * @var array
     */
    public $haVip;
    protected $_name = [
        'haVip' => 'HaVip',
    ];

    public function validate()
    {
        Model::validateRequired('haVip', $this->haVip, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVip) {
            $res['HaVip'] = [];
            if (null !== $this->haVip && \is_array($this->haVip)) {
                $n = 0;
                foreach ($this->haVip as $item) {
                    $res['HaVip'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return haVips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVip'])) {
            if (!empty($map['HaVip'])) {
                $model->haVip = [];
                $n            = 0;
                foreach ($map['HaVip'] as $item) {
                    $model->haVip[$n++] = null !== $item ? haVip::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
