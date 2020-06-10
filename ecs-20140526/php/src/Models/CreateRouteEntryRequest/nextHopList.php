<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateRouteEntryRequest;

use AlibabaCloud\Tea\Model;

class nextHopList extends Model
{
    /**
     * @description nextHopType
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description nextHopId
     *
     * @var string
     */
    public $nextHopId;
    protected $_name = [
        'nextHopType' => 'NextHopType',
        'nextHopId'   => 'NextHopId',
    ];

    public function validate()
    {
        Model::validateRequired('nextHopType', $this->nextHopType, true);
        Model::validateRequired('nextHopId', $this->nextHopId, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHopList
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

        return $model;
    }
}
