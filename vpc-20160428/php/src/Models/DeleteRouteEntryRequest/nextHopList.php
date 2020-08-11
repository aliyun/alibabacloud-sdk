<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntryRequest;

use AlibabaCloud\Tea\Model;

class nextHopList extends Model
{
    /**
     * @var string
     */
    public $nextHopType;

    /**
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
