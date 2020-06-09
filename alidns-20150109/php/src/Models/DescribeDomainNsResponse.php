<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponse\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponse\expectDnsServers;

class DescribeDomainNsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'allAliDns' => 'AllAliDns',
        'includeAliDns' => 'IncludeAliDns',
        'dnsServers' => 'DnsServers',
        'expectDnsServers' => 'ExpectDnsServers',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('allAliDns', $this->allAliDns, true);
        Model::validateRequired('includeAliDns', $this->includeAliDns, true);
        Model::validateRequired('dnsServers', $this->dnsServers, true);
        Model::validateRequired('expectDnsServers', $this->expectDnsServers, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AllAliDns'] = $this->allAliDns;
        $res['IncludeAliDns'] = $this->includeAliDns;
        $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        $res['ExpectDnsServers'] = null !== $this->expectDnsServers ? $this->expectDnsServers->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainNsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AllAliDns'])){
            $model->allAliDns = $map['AllAliDns'];
        }
        if(isset($map['IncludeAliDns'])){
            $model->includeAliDns = $map['IncludeAliDns'];
        }
        if(isset($map['DnsServers'])){
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        if(isset($map['ExpectDnsServers'])){
            $model->expectDnsServers = expectDnsServers::fromMap($map['ExpectDnsServers']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.allAliDns
     * @var bool
     */
    public $allAliDns;

    /**
     * @description module.includeAliDns
     * @var bool
     */
    public $includeAliDns;

    /**
     * @description module.dnsList
     * @var dnsServers
     */
    public $dnsServers;

    /**
     * @description module.expectDnsList
     * @var expectDnsServers
     */
    public $expectDnsServers;

}
