<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListUsersForGroupRequest extends Model
{
    /**
     * @description GroupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Marker
     *
     * @var string
     */
    public $marker;

    /**
     * @description MaxItems
     *
     * @var int
     */
    public $maxItems;
    protected $_name = [
        'groupName' => 'GroupName',
        'marker'    => 'Marker',
        'maxItems'  => 'MaxItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersForGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }

        return $model;
    }
}
