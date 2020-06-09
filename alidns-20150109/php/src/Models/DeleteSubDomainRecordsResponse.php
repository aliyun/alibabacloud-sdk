<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteSubDomainRecordsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'RR' => 'RR',
        'totalCount' => 'TotalCount',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('RR', $this->RR, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RR'] = $this->RR;
        $res['TotalCount'] = $this->totalCount;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteSubDomainRecordsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RR'])){
            $model->RR = $map['RR'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.subDomain
     * @var string
     */
    public $RR;

    /**
     * @description module.totalCount
     * @var string
     */
    public $totalCount;

}
