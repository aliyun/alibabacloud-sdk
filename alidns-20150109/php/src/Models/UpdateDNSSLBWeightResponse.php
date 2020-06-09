<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDNSSLBWeightResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'recordId' => 'RecordId',
        'weight' => 'Weight',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('weight', $this->weight, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RecordId'] = $this->recordId;
        $res['Weight'] = $this->weight;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateDNSSLBWeightResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RecordId'])){
            $model->recordId = $map['RecordId'];
        }
        if(isset($map['Weight'])){
            $model->weight = $map['Weight'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.rrId
     * @var string
     */
    public $recordId;

    /**
     * @description module.weight
     * @var integer
     */
    public $weight;

}
