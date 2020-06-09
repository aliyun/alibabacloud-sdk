<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetMainDomainNameResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'RR' => 'RR',
        'domainLevel' => 'DomainLevel',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('RR', $this->RR, true);
        Model::validateRequired('domainLevel', $this->domainLevel, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['RR'] = $this->RR;
        $res['DomainLevel'] = $this->domainLevel;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMainDomainNameResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['RR'])){
            $model->RR = $map['RR'];
        }
        if(isset($map['DomainLevel'])){
            $model->domainLevel = $map['DomainLevel'];
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
     * @description module.rr
     * @var string
     */
    public $RR;

    /**
     * @description module.domainLevel
     * @var integer
     */
    public $domainLevel;

}
