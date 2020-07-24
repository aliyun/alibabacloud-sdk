<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetKubernetesTriggerQuery extends Model
{
    /**
     * @description namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'namespace' => 'Namespace',
        'type'      => 'Type',
        'name'      => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKubernetesTriggerQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
