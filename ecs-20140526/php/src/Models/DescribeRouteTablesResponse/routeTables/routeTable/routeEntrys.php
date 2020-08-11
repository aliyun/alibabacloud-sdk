<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse\routeTables\routeTable;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys\routeEntry;
use AlibabaCloud\Tea\Model;

class routeEntrys extends Model
{
    /**
     * @var array
     */
    public $routeEntry;
    protected $_name = [
        'routeEntry' => 'RouteEntry',
    ];

    public function validate()
    {
        Model::validateRequired('routeEntry', $this->routeEntry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeEntry) {
            $res['RouteEntry'] = [];
            if (null !== $this->routeEntry && \is_array($this->routeEntry)) {
                $n = 0;
                foreach ($this->routeEntry as $item) {
                    $res['RouteEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntrys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteEntry'])) {
            if (!empty($map['RouteEntry'])) {
                $model->routeEntry = [];
                $n                 = 0;
                foreach ($map['RouteEntry'] as $item) {
                    $model->routeEntry[$n++] = null !== $item ? routeEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
