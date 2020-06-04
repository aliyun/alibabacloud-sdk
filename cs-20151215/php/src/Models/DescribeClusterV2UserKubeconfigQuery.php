<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterV2UserKubeconfigQuery extends Model {
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['PrivateIpAddress'] = $this->privateIpAddress;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeClusterV2UserKubeconfigQuery
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PrivateIpAddress'])){
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        return $model;
    }
    /**
     * @description PrivateIpAddress
     * @var bool
     */
    public $privateIpAddress;

}
