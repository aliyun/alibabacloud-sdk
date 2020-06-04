<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterUserKubeconfigResponseBody extends Model {
    protected $_name = [
        'config' => 'config',
    ];
    public function validate() {
        Model::validateRequired('config', $this->config, true);
    }
    public function toMap() {
        $res = [];
        $res['config'] = $this->config;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeClusterUserKubeconfigResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['config'])){
            $model->config = $map['config'];
        }
        return $model;
    }
    /**
     * @description config
     * @var string
     */
    public $config;

}
