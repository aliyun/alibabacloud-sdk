<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainDnssecInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'status' => 'Status',
        'dsRecord' => 'DsRecord',
        'digest' => 'Digest',
        'digestType' => 'DigestType',
        'algorithm' => 'Algorithm',
        'publicKey' => 'PublicKey',
        'keyTag' => 'KeyTag',
        'flags' => 'Flags',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('dsRecord', $this->dsRecord, true);
        Model::validateRequired('digest', $this->digest, true);
        Model::validateRequired('digestType', $this->digestType, true);
        Model::validateRequired('algorithm', $this->algorithm, true);
        Model::validateRequired('publicKey', $this->publicKey, true);
        Model::validateRequired('keyTag', $this->keyTag, true);
        Model::validateRequired('flags', $this->flags, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['Status'] = $this->status;
        $res['DsRecord'] = $this->dsRecord;
        $res['Digest'] = $this->digest;
        $res['DigestType'] = $this->digestType;
        $res['Algorithm'] = $this->algorithm;
        $res['PublicKey'] = $this->publicKey;
        $res['KeyTag'] = $this->keyTag;
        $res['Flags'] = $this->flags;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainDnssecInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['DsRecord'])){
            $model->dsRecord = $map['DsRecord'];
        }
        if(isset($map['Digest'])){
            $model->digest = $map['Digest'];
        }
        if(isset($map['DigestType'])){
            $model->digestType = $map['DigestType'];
        }
        if(isset($map['Algorithm'])){
            $model->algorithm = $map['Algorithm'];
        }
        if(isset($map['PublicKey'])){
            $model->publicKey = $map['PublicKey'];
        }
        if(isset($map['KeyTag'])){
            $model->keyTag = $map['KeyTag'];
        }
        if(isset($map['Flags'])){
            $model->flags = $map['Flags'];
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
     * @description module.status
     * @var string
     */
    public $status;

    /**
     * @description module.dsRecord
     * @var string
     */
    public $dsRecord;

    /**
     * @description module.digest
     * @var string
     */
    public $digest;

    /**
     * @description module.digestType
     * @var string
     */
    public $digestType;

    /**
     * @description module.algorithm
     * @var string
     */
    public $algorithm;

    /**
     * @description module.publicKey
     * @var string
     */
    public $publicKey;

    /**
     * @description module.keyTag
     * @var string
     */
    public $keyTag;

    /**
     * @description module.flags
     * @var string
     */
    public $flags;

}
