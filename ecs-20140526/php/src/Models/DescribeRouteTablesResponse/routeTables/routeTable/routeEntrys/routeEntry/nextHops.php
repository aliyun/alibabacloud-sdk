<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys\routeEntry;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys\routeEntry\nextHops\nextHop;
use AlibabaCloud\Tea\Model;

class nextHops extends Model
{
    /**
     * @description NextHop
     *
     * @var array
     */
    public $nextHop;
    protected $_name = [
        'nextHop' => 'NextHop',
    ];

    public function validate()
    {
        Model::validateRequired('nextHop', $this->nextHop, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHop) {
            $res['NextHop'] = [];
            if (null !== $this->nextHop && \is_array($this->nextHop)) {
                $n = 0;
                foreach ($this->nextHop as $item) {
                    $res['NextHop'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHop'])) {
            if (!empty($map['NextHop'])) {
                $model->nextHop = [];
                $n              = 0;
                foreach ($map['NextHop'] as $item) {
                    $model->nextHop[$n++] = null !== $item ? nextHop::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
