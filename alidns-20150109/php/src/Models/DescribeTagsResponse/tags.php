<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTagsResponse;

use AlibabaCloud\Tea\Model;

class tags extends Model {
    protected $_name = [
        'key' => 'Key',
    ];
    public function validate() {
        Model::validateRequired('key', $this->key, true);
    }
    public function toMap() {
        $res = [];
        $res['Key'] = $this->key;
        return $res;
    }
    /**
     * @param array $map
     * @return tags
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        return $model;
    }
    /**
     * @description key
     * @var string
     */
    public $key;

}
