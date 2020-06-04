<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\containers\readinessProbe;

use AlibabaCloud\Tea\Model;

class tcpSocket extends Model {
    protected $_name = [
        'port' => 'Port',
    ];
    public function validate() {
        Model::validateRequired('port', $this->port, true);
    }
    public function toMap() {
        $res = [];
        $res['Port'] = $this->port;
        return $res;
    }
    /**
     * @param array $map
     * @return tcpSocket
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        return $model;
    }
    /**
     * @description port
     * @var integer
     */
    public $port;

}
