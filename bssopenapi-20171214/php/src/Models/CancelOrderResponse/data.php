<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description hostId
     *
     * @var string
     */
    public $hostId;
    protected $_name = [
        'hostId' => 'HostId',
    ];

    public function validate()
    {
        Model::validateRequired('hostId', $this->hostId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        return $model;
    }
}
