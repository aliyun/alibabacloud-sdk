<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class hostAliase extends Model {
    protected $_name = [
        'ip' => 'Ip',
        'hostname' => 'Hostname',
    ];
    public function validate() {
        Model::validateRequired('hostname', $this->hostname, true);
    }
    public function toMap() {
        $res = [];
        $res['Ip'] = $this->ip;
        $res['Hostname'] = [];
        if(null !== $this->hostname){
            $res['Hostname'] = $this->hostname;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return hostAliase
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Ip'])){
            $model->ip = $map['Ip'];
        }
        if(isset($map['Hostname'])){
            if(!empty($map['Hostname'])){
                $model->hostname = [];
                $model->hostname = $map['Hostname'];
            }
        }
        return $model;
    }
    /**
     * @description ip
     * @var string
     */
    public $ip;

    /**
     * @description hostnames
     * @var array
     */
    public $hostname;

}
