<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Response\demo01;
use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Response\demo01\demo011;

class BatchAuditTest01Response extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'name' => 'Name',
        'demo01' => 'Demo01',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('demo01', $this->demo01, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Name'] = $this->name;
        $res['Demo01'] = null !== $this->demo01 ? $this->demo01->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return BatchAuditTest01Response
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Demo01'])){
            $model->demo01 = demo01::fromMap($map['Demo01']);
        }
        return $model;
    }
    /**
     * @description Params.requestId
     * @var string
     */
    public $requestId;

    /**
     * @description Params.name
     * @var string
     */
    public $name;

    /**
     * @description Demo01
     * @var demo01
     */
    public $demo01;

}
