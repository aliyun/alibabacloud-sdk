<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\relations\nodes;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\relations\relationTestConfig;
use AlibabaCloud\Tea\Model;

class relations extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description disabled
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description headers
     *
     * @var array
     */
    public $headers;

    /**
     * @description nodes
     *
     * @var array
     */
    public $nodes;

    /**
     * @description relationTestConfig
     *
     * @var relationTestConfig
     */
    public $relationTestConfig;
    protected $_name = [
        'id'                 => 'Id',
        'name'               => 'Name',
        'disabled'           => 'Disabled',
        'headers'            => 'Headers',
        'nodes'              => 'Nodes',
        'relationTestConfig' => 'RelationTestConfig',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('disabled', $this->disabled, true);
        Model::validateRequired('headers', $this->headers, true);
        Model::validateRequired('nodes', $this->nodes, true);
        Model::validateRequired('relationTestConfig', $this->relationTestConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationTestConfig) {
            $res['RelationTestConfig'] = null !== $this->relationTestConfig ? $this->relationTestConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelationTestConfig'])) {
            $model->relationTestConfig = relationTestConfig::fromMap($map['RelationTestConfig']);
        }

        return $model;
    }
}
