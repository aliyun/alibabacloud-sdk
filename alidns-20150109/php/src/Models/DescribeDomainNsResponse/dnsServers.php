<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponse;

use AlibabaCloud\Tea\Model;

class dnsServers extends Model {
    protected $_name = [
        'dnsServer' => 'DnsServer',
    ];
    public function validate() {
        Model::validateRequired('dnsServer', $this->dnsServer, true);
    }
    public function toMap() {
        $res = [];
        $res['DnsServer'] = [];
        if(null !== $this->dnsServer){
            $res['DnsServer'] = $this->dnsServer;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dnsServers
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DnsServer'])){
            if(!empty($map['DnsServer'])){
                $model->dnsServer = [];
                $model->dnsServer = $map['DnsServer'];
            }
        }
        return $model;
    }
    /**
     * @description DnsServer
     * @var array
     */
    public $dnsServer;

}
