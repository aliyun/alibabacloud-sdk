<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineRequest;

use AlibabaCloud\Tea\Model;

class ipSegment extends Model {
    protected $_name = [
        'startIp' => 'StartIp',
        'endIp' => 'EndIp',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['StartIp'] = $this->startIp;
        $res['EndIp'] = $this->endIp;
        return $res;
    }
    /**
     * @param array $map
     * @return ipSegment
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StartIp'])){
            $model->startIp = $map['StartIp'];
        }
        if(isset($map['EndIp'])){
            $model->endIp = $map['EndIp'];
        }
        return $model;
    }
    /**
     * @description startIp
     * @var string
     */
    public $startIp;

    /**
     * @description endIp
     * @var string
     */
    public $endIp;

}
