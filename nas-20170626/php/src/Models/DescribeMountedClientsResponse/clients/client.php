<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponse\clients;

use AlibabaCloud\Tea\Model;

class client extends Model {
    protected $_name = [
        'clientIP' => 'ClientIP',
    ];
    public function validate() {
        Model::validateRequired('clientIP', $this->clientIP, true);
    }
    public function toMap() {
        $res = [];
        $res['ClientIP'] = $this->clientIP;
        return $res;
    }
    /**
     * @param array $map
     * @return client
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ClientIP'])){
            $model->clientIP = $map['ClientIP'];
        }
        return $model;
    }
    /**
     * @description ClientIP
     * @var string
     */
    public $clientIP;

}
