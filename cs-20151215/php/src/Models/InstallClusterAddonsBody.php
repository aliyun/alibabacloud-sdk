<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class InstallClusterAddonsBody extends Model {
    protected $_name = [
        'name' => 'name',
        'version' => 'version',
        'disabled' => 'disabled',
        'required' => 'required',
        'config' => 'config',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['name'] = $this->name;
        $res['version'] = $this->version;
        $res['disabled'] = $this->disabled;
        $res['required'] = $this->required;
        $res['config'] = $this->config;
        return $res;
    }
    /**
     * @param array $map
     * @return InstallClusterAddonsBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['disabled'])){
            $model->disabled = $map['disabled'];
        }
        if(isset($map['required'])){
            $model->required = $map['required'];
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
     * @description version
     * @var string
     */
    public $version;

    /**
     * @description disabled
     * @var bool
     */
    public $disabled;

    /**
     * @description required
     * @var string
     */
    public $required;

    /**
     * @description config
     * @var string
     */
    public $config;

}
