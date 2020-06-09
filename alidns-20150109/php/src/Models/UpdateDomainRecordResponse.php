<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRecordResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'recordId' => 'RecordId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordId', $this->recordId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RecordId'] = $this->recordId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateDomainRecordResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RecordId'])){
            $model->recordId = $map['RecordId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module
     * @var string
     */
    public $recordId;

}
