<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestHttpApiResponse extends Model {
    protected $_name = [
        'params' => 'Params',
        'serviceRpcSign' => 'ServiceRpcSign',
    ];
    public function validate() {
        Model::validateRequired('params', $this->params, true);
        Model::validateRequired('serviceRpcSign', $this->serviceRpcSign, true);
    }
    public function toMap() {
        $res = [];
        $res['Params'] = $this->params;
        $res['ServiceRpcSign'] = $this->serviceRpcSign;
        return $res;
    }
    /**
     * @param array $map
     * @return TestHttpApiResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Params'])){
            $model->params = $map['Params'];
        }
        if(isset($map['ServiceRpcSign'])){
            $model->serviceRpcSign = $map['ServiceRpcSign'];
        }
        return $model;
    }
    /**
     * @description Params
     * @var string
     */
    public $params;

    /**
     * @description ServiceRpcSign
     * @var string
     */
    public $serviceRpcSign;

}
