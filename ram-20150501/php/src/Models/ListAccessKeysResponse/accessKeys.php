<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysResponse\accessKeys\accessKey;

class accessKeys extends Model {
    protected $_name = [
        'accessKey' => 'AccessKey',
    ];
    public function validate() {
        Model::validateRequired('accessKey', $this->accessKey, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKey'] = [];
        if(null !== $this->accessKey && is_array($this->accessKey)){
            $n = 0;
            foreach($this->accessKey as $item){
                $res['AccessKey'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return accessKeys
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKey'])){
            if(!empty($map['AccessKey'])){
                $model->accessKey = [];
                $n = 0;
                foreach($map['AccessKey'] as $item) {
                    $model->accessKey[$n++] = null !== $item ? accessKey::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AccessKey
     * @var array
     */
    public $accessKey;

}
