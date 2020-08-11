<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys\routeEntry\nextHops;

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

    /**
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @var string
     */
    public $nextHopOppsiteType;

    /**
     * @var string
     */
    public $nextHopOppsiteInstanceId;

    /**
     * @var string
     */
    public $nextHopOppsiteRegionId;
    protected $_name = [
        'nextHopType'              => 'NextHopType',
        'nextHopId'                => 'NextHopId',
        'enabled'                  => 'Enabled',
        'weight'                   => 'Weight',
        'nextHopRegionId'          => 'NextHopRegionId',
        'nextHopOppsiteType'       => 'NextHopOppsiteType',
        'nextHopOppsiteInstanceId' => 'NextHopOppsiteInstanceId',
        'nextHopOppsiteRegionId'   => 'NextHopOppsiteRegionId',
    ];

    public function validate()
    {
        Model::validateRequired('nextHopType', $this->nextHopType, true);
        Model::validateRequired('nextHopId', $this->nextHopId, true);
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('weight', $this->weight, true);
        Model::validateRequired('nextHopRegionId', $this->nextHopRegionId, true);
        Model::validateRequired('nextHopOppsiteType', $this->nextHopOppsiteType, true);
        Model::validateRequired('nextHopOppsiteInstanceId', $this->nextHopOppsiteInstanceId, true);
        Model::validateRequired('nextHopOppsiteRegionId', $this->nextHopOppsiteRegionId, true);
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
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }
        if (null !== $this->nextHopOppsiteType) {
            $res['NextHopOppsiteType'] = $this->nextHopOppsiteType;
        }
        if (null !== $this->nextHopOppsiteInstanceId) {
            $res['NextHopOppsiteInstanceId'] = $this->nextHopOppsiteInstanceId;
        }
        if (null !== $this->nextHopOppsiteRegionId) {
            $res['NextHopOppsiteRegionId'] = $this->nextHopOppsiteRegionId;
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
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }
        if (isset($map['NextHopOppsiteType'])) {
            $model->nextHopOppsiteType = $map['NextHopOppsiteType'];
        }
        if (isset($map['NextHopOppsiteInstanceId'])) {
            $model->nextHopOppsiteInstanceId = $map['NextHopOppsiteInstanceId'];
        }
        if (isset($map['NextHopOppsiteRegionId'])) {
            $model->nextHopOppsiteRegionId = $map['NextHopOppsiteRegionId'];
        }

        return $model;
    }
}
