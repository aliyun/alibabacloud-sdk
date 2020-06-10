<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainResponse\dnsServers;
use AlibabaCloud\Tea\Model;

class AddDomainResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.domainId
     *
     * @var string
     */
    public $domainId;

    /**
     * @description module.domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description module.punyCode
     *
     * @var string
     */
    public $punyCode;

    /**
     * @description module.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description module.groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description module.dnsList
     *
     * @var dnsServers
     */
    public $dnsServers;
    protected $_name = [
        'requestId'  => 'RequestId',
        'domainId'   => 'DomainId',
        'domainName' => 'DomainName',
        'punyCode'   => 'PunyCode',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'dnsServers' => 'DnsServers',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainId', $this->domainId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('punyCode', $this->punyCode, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('dnsServers', $this->dnsServers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDomainResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['DnsServers'])) {
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }

        return $model;
    }
}
