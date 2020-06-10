<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSimulatedSystemEventsResponse;

use AlibabaCloud\Tea\Model;

class eventIdSet extends Model
{
    /**
     * @description EventId
     *
     * @var array
     */
    public $eventId;
    protected $_name = [
        'eventId' => 'EventId',
    ];

    public function validate()
    {
        Model::validateRequired('eventId', $this->eventId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = [];
            if (null !== $this->eventId) {
                $res['EventId'] = $this->eventId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventIdSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            if (!empty($map['EventId'])) {
                $model->eventId = [];
                $model->eventId = $map['EventId'];
            }
        }

        return $model;
    }
}
