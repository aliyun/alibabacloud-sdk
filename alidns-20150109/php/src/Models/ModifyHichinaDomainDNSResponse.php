<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSResponse\newDnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSResponse\originalDnsServers;
use AlibabaCloud\Tea\Model;

class ModifyHichinaDomainDNSResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.originalDnsServers
     *
     * @var originalDnsServers
     */
    public $originalDnsServers;

    /**
     * @description module.newDnsServers
     *
     * @var newDnsServers
     */
    public $newDnsServers;
    protected $_name = [
        'requestId'          => 'RequestId',
        'originalDnsServers' => 'OriginalDnsServers',
        'newDnsServers'      => 'NewDnsServers',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('originalDnsServers', $this->originalDnsServers, true);
        Model::validateRequired('newDnsServers', $this->newDnsServers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->originalDnsServers) {
            $res['OriginalDnsServers'] = null !== $this->originalDnsServers ? $this->originalDnsServers->toMap() : null;
        }
        if (null !== $this->newDnsServers) {
            $res['NewDnsServers'] = null !== $this->newDnsServers ? $this->newDnsServers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHichinaDomainDNSResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OriginalDnsServers'])) {
            $model->originalDnsServers = originalDnsServers::fromMap($map['OriginalDnsServers']);
        }
        if (isset($map['NewDnsServers'])) {
            $model->newDnsServers = newDnsServers::fromMap($map['NewDnsServers']);
        }

        return $model;
    }
}
