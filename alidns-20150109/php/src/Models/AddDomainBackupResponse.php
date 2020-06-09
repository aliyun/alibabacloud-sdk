<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDomainBackupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'periodType' => 'PeriodType',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('periodType', $this->periodType, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['PeriodType'] = $this->periodType;
        return $res;
    }
    /**
     * @param array $map
     * @return AddDomainBackupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['PeriodType'])){
            $model->periodType = $map['PeriodType'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.domainName
     * @var string
     */
    public $domainName;

    /**
     * @description module.periodType
     * @var string
     */
    public $periodType;

}
