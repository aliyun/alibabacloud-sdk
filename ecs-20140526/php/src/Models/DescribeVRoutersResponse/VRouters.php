<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponse\VRouters\VRouter;
use AlibabaCloud\Tea\Model;

class VRouters extends Model
{
    /**
     * @var array
     */
    public $VRouter;
    protected $_name = [
        'VRouter' => 'VRouter',
    ];

    public function validate()
    {
        Model::validateRequired('VRouter', $this->VRouter, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VRouter) {
            $res['VRouter'] = [];
            if (null !== $this->VRouter && \is_array($this->VRouter)) {
                $n = 0;
                foreach ($this->VRouter as $item) {
                    $res['VRouter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VRouters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VRouter'])) {
            if (!empty($map['VRouter'])) {
                $model->VRouter = [];
                $n              = 0;
                foreach ($map['VRouter'] as $item) {
                    $model->VRouter[$n++] = null !== $item ? VRouter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
