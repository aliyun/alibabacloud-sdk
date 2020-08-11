<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponse\eventIdSet;
use AlibabaCloud\Tea\Model;

class CreateSimulatedSystemEventsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var eventIdSet
     */
    public $eventIdSet;
    protected $_name = [
        'requestId'  => 'RequestId',
        'eventIdSet' => 'EventIdSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('eventIdSet', $this->eventIdSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eventIdSet) {
            $res['EventIdSet'] = null !== $this->eventIdSet ? $this->eventIdSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimulatedSystemEventsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EventIdSet'])) {
            $model->eventIdSet = eventIdSet::fromMap($map['EventIdSet']);
        }

        return $model;
    }
}
