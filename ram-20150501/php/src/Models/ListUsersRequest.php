<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListUsersRequest extends Model {
    protected $_name = [
        'marker' => 'Marker',
        'maxItems' => 'MaxItems',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Marker'] = $this->marker;
        $res['MaxItems'] = $this->maxItems;
        return $res;
    }
    /**
     * @param array $map
     * @return ListUsersRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Marker'])){
            $model->marker = $map['Marker'];
        }
        if(isset($map['MaxItems'])){
            $model->maxItems = $map['MaxItems'];
        }
        return $model;
    }
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
