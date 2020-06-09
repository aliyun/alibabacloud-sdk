<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDomainRecordStatusResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'recordId' => 'RecordId',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RecordId'] = $this->recordId;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return SetDomainRecordStatusResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RecordId'])){
            $model->recordId = $map['RecordId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
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
     * @description module.status
     * @var string
     */
    public $status;

}
