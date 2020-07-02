<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteConnectionRequest extends Model
{
    /**
     * @description connectionId
     *
     * @var int
     */
    public $connectionId;
    protected $_name = [
        'connectionId' => 'ConnectionId',
    ];

    public function validate()
    {
        Model::validateRequired('connectionId', $this->connectionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        return $model;
    }
}
