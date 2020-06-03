<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressDubboRequest extends Model {
    protected $_name = [
        'intValue' => 'IntValue',
        'stringValue' => 'StringValue',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['IntValue'] = $this->intValue;
        $res['StringValue'] = $this->stringValue;
        return $res;
    }
    /**
     * @param array $map
     * @return FtDynamicAddressDubboRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['IntValue'])){
            $model->intValue = $map['IntValue'];
        }
        if(isset($map['StringValue'])){
            $model->stringValue = $map['StringValue'];
        }
        return $model;
    }
    /**
     * @description intValue
     * @var integer
     */
    public $intValue;

    /**
     * @description stringValue
     * @var string
     */
    public $stringValue;

}
