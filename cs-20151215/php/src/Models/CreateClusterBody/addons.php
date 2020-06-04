<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterBody;

use AlibabaCloud\Tea\Model;

class addons extends Model {
    protected $_name = [
        'name' => 'name',
        'config' => 'config',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['name'] = $this->name;
        $res['config'] = $this->config;
        return $res;
    }
    /**
     * @param array $map
     * @return addons
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['config'])){
            $model->config = $map['config'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description config
     * @var string
     */
    public $config;

}
