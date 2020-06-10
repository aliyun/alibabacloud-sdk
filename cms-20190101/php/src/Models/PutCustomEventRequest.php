<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRequest\eventInfo;
use AlibabaCloud\Tea\Model;

class PutCustomEventRequest extends Model
{
    /**
     * @description eventInfo
     *
     * @var array
     */
    public $eventInfo;
    protected $_name = [
        'eventInfo' => 'EventInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventInfo) {
            $res['EventInfo'] = [];
            if (null !== $this->eventInfo && \is_array($this->eventInfo)) {
                $n = 0;
                foreach ($this->eventInfo as $item) {
                    $res['EventInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutCustomEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventInfo'])) {
            if (!empty($map['EventInfo'])) {
                $model->eventInfo = [];
                $n                = 0;
                foreach ($map['EventInfo'] as $item) {
                    $model->eventInfo[$n++] = null !== $item ? eventInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
