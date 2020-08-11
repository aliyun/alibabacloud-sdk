<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys\routeEntry\nextHops;

use AlibabaCloud\Tea\Model;

class nextHop extends Model
{
    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'nextHopType' => 'NextHopType',
        'nextHopId'   => 'NextHopId',
        'enabled'     => 'Enabled',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
        Model::validateRequired('nextHopType', $this->nextHopType, true);
        Model::validateRequired('nextHopId', $this->nextHopId, true);
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('weight', $this->weight, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
