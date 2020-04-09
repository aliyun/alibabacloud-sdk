<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\CreateClusterBody;

use AlibabaCloud\Tea\Model;

class addons extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;
    /**
     * @description config
     *
     * @var string
     */
    public $config;
    protected $_name = [
        'name'   => 'name',
        'config' => 'config',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('config', $this->config, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['name']   = $this->name;
        $res['config'] = $this->config;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        return $model;
    }
}
