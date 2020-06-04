<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class port extends Model {
    protected $_name = [
        'protocol' => 'Protocol',
        'port' => 'Port',
    ];
    public function validate() {
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('port', $this->port, true);
    }
    public function toMap() {
        $res = [];
        $res['Protocol'] = $this->protocol;
        $res['Port'] = $this->port;
        return $res;
    }
    /**
     * @param array $map
     * @return port
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Protocol'])){
            $model->protocol = $map['Protocol'];
        }
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        return $model;
    }
    /**
     * @description protocol
     * @var string
     */
    public $protocol;

    /**
     * @description port
     * @var integer
     */
    public $port;

}
