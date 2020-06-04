<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class ports extends Model {
    protected $_name = [
        'port' => 'Port',
        'protocol' => 'Protocol',
    ];
    public function validate() {
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('protocol', $this->protocol, true);
    }
    public function toMap() {
        $res = [];
        $res['Port'] = $this->port;
        $res['Protocol'] = $this->protocol;
        return $res;
    }
    /**
     * @param array $map
     * @return ports
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        if(isset($map['Protocol'])){
            $model->protocol = $map['Protocol'];
        }
        return $model;
    }
    /**
     * @description port
     * @var integer
     */
    public $port;

    /**
     * @description protocol
     * @var string
     */
    public $protocol;

}
