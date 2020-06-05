<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListUsersForGroupRequest extends Model {
    protected $_name = [
        'groupName' => 'GroupName',
        'marker' => 'Marker',
        'maxItems' => 'MaxItems',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['GroupName'] = $this->groupName;
        $res['Marker'] = $this->marker;
        $res['MaxItems'] = $this->maxItems;
        return $res;
    }
    /**
     * @param array $map
     * @return ListUsersForGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        if(isset($map['Marker'])){
            $model->marker = $map['Marker'];
        }
        if(isset($map['MaxItems'])){
            $model->maxItems = $map['MaxItems'];
        }
        return $model;
    }
    /**
     * @description GroupName
     * @var string
     */
    public $groupName;

    /**
     * @description Marker
     * @var string
     */
    public $marker;

    /**
     * @description MaxItems
     * @var integer
     */
    public $maxItems;

}
