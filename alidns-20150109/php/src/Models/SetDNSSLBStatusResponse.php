<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDNSSLBStatusResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'recordCount' => 'RecordCount',
        'open' => 'Open',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('open', $this->open, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RecordCount'] = $this->recordCount;
        $res['Open'] = $this->open;
        return $res;
    }
    /**
     * @param array $map
     * @return SetDNSSLBStatusResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RecordCount'])){
            $model->recordCount = $map['RecordCount'];
        }
        if(isset($map['Open'])){
            $model->open = $map['Open'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.recordCount
     * @var integer
     */
    public $recordCount;

    /**
     * @description module.open
     * @var bool
     */
    public $open;

}
