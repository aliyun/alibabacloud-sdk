<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainResponse;

use AlibabaCloud\Tea\Model;

class dnsServers extends Model
{
    /**
     * @description DnsServer
     *
     * @var array
     */
    public $dnsServer;
    protected $_name = [
        'dnsServer' => 'DnsServer',
    ];

    public function validate()
    {
        Model::validateRequired('dnsServer', $this->dnsServer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsServer) {
            $res['DnsServer'] = [];
            if (null !== $this->dnsServer) {
                $res['DnsServer'] = $this->dnsServer;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsServer'])) {
            if (!empty($map['DnsServer'])) {
                $model->dnsServer = [];
                $model->dnsServer = $map['DnsServer'];
            }
        }

        return $model;
    }
}
