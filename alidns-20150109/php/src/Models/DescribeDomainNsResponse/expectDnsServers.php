<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponse;

use AlibabaCloud\Tea\Model;

class expectDnsServers extends Model {
    protected $_name = [
        'expectDnsServer' => 'ExpectDnsServer',
    ];
    public function validate() {
        Model::validateRequired('expectDnsServer', $this->expectDnsServer, true);
    }
    public function toMap() {
        $res = [];
        $res['ExpectDnsServer'] = [];
        if(null !== $this->expectDnsServer){
            $res['ExpectDnsServer'] = $this->expectDnsServer;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return expectDnsServers
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ExpectDnsServer'])){
            if(!empty($map['ExpectDnsServer'])){
                $model->expectDnsServer = [];
                $model->expectDnsServer = $map['ExpectDnsServer'];
            }
        }
        return $model;
    }
    /**
     * @description ExpectDnsServer
     * @var array
     */
    public $expectDnsServer;

}
