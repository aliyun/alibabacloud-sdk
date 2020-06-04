<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\livenessProbe;

use AlibabaCloud\Tea\Model;

class tcpSocket extends Model {
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
    ];
    public function validate() {
        Model::validateRequired('host', $this->host, true);
        Model::validateRequired('port', $this->port, true);
    }
    public function toMap() {
        $res = [];
        $res['Host'] = $this->host;
        $res['Port'] = $this->port;
        return $res;
    }
    /**
     * @param array $map
     * @return tcpSocket
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Host'])){
            $model->host = $map['Host'];
        }
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        return $model;
    }
    /**
     * @description host
     * @var string
     */
    public $host;

    /**
     * @description port
     * @var integer
     */
    public $port;

}
