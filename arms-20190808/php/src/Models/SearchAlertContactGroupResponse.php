<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponse\contactGroups;
use AlibabaCloud\Tea\Model;

class SearchAlertContactGroupResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var array
     */
    public $contactGroups;
    protected $_name = [
        'requestId'     => 'RequestId',
        'contactGroups' => 'ContactGroups',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('contactGroups', $this->contactGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = [];
            if (null !== $this->contactGroups && \is_array($this->contactGroups)) {
                $n = 0;
                foreach ($this->contactGroups as $item) {
                    $res['ContactGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchAlertContactGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = [];
                $n                    = 0;
                foreach ($map['ContactGroups'] as $item) {
                    $model->contactGroups[$n++] = null !== $item ? contactGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
