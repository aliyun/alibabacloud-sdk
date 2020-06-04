<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\environmentVar;

use AlibabaCloud\Tea\Model;

class fieldRef extends Model {
    protected $_name = [
        'fieldPath' => 'FieldPath',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['FieldPath'] = $this->fieldPath;
        return $res;
    }
    /**
     * @param array $map
     * @return fieldRef
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FieldPath'])){
            $model->fieldPath = $map['FieldPath'];
        }
        return $model;
    }
    /**
     * @description fieldRefFieldPath
     * @var string
     */
    public $fieldPath;

}
