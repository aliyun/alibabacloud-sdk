<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteRouteEntryRequest\nextHopList;
use AlibabaCloud\Tea\Model;

class DeleteRouteEntryRequest extends Model
{
    /**
     * @var array
     */
    public $nextHopList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $nextHopId;
    protected $_name = [
        'nextHopList'          => 'NextHopList',
        'regionId'             => 'RegionId',
        'routeTableId'         => 'RouteTableId',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopId'            => 'NextHopId',
    ];

    public function validate()
    {
        Model::validateRequired('routeTableId', $this->routeTableId, true);
        Model::validateRequired('destinationCidrBlock', $this->destinationCidrBlock, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHopList) {
            $res['NextHopList'] = [];
            if (null !== $this->nextHopList && \is_array($this->nextHopList)) {
                $n = 0;
                foreach ($this->nextHopList as $item) {
                    $res['NextHopList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHopList'])) {
            if (!empty($map['NextHopList'])) {
                $model->nextHopList = [];
                $n                  = 0;
                foreach ($map['NextHopList'] as $item) {
                    $model->nextHopList[$n++] = null !== $item ? nextHopList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }

        return $model;
    }
}
