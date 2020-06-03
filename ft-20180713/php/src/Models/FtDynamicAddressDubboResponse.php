<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressDubboResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'stringValue' => 'StringValue',
        'intValue' => 'IntValue',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stringValue', $this->stringValue, true);
        Model::validateRequired('intValue', $this->intValue, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['StringValue'] = $this->stringValue;
        $res['IntValue'] = $this->intValue;
        return $res;
    }
    /**
     * @param array $map
     * @return FtDynamicAddressDubboResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['StringValue'])){
            $model->stringValue = $map['StringValue'];
        }
        if(isset($map['IntValue'])){
            $model->intValue = $map['IntValue'];
        }
        return $model;
    }
    /**
     * @description Params.requestId
     * @var string
     */
    public $requestId;

    /**
     * @description stringValue
     * @var string
     */
    public $stringValue;

    /**
     * @description intValue
     * @var integer
     */
    public $intValue;

}
