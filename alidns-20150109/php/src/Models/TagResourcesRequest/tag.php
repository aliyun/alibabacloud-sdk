<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model {
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Key'] = $this->key;
        $res['Value'] = $this->value;
        return $res;
    }
    /**
     * @param array $map
     * @return tag
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        return $model;
    }
    /**
     * @description key
     * @var string
     */
    public $key;

    /**
     * @description value
     * @var string
     */
    public $value;

}
