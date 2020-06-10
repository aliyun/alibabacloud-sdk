<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetMainDomainNameResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description module.rr
     *
     * @var string
     */
    public $RR;

    /**
     * @description module.domainLevel
     *
     * @var int
     */
    public $domainLevel;
    protected $_name = [
        'requestId'   => 'RequestId',
        'domainName'  => 'DomainName',
        'RR'          => 'RR',
        'domainLevel' => 'DomainLevel',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('RR', $this->RR, true);
        Model::validateRequired('domainLevel', $this->domainLevel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->domainLevel) {
            $res['DomainLevel'] = $this->domainLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMainDomainNameResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['DomainLevel'])) {
            $model->domainLevel = $map['DomainLevel'];
        }

        return $model;
    }
}
