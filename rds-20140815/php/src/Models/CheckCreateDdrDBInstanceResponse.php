<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckCreateDdrDBInstanceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'isValid' => 'IsValid',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isValid', $this->isValid, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['IsValid'] = $this->isValid;
        return $res;
    }
    /**
     * @param array $map
     * @return CheckCreateDdrDBInstanceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['IsValid'])){
            $model->isValid = $map['IsValid'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.valid
     * @var string
     */
    public $isValid;

}
