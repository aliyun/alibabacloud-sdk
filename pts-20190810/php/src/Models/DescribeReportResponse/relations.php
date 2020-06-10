<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportResponse;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportResponse\relations\nodes;
use AlibabaCloud\Tea\Model;

class relations extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description Id
     *
     * @var int
     */
    public $id;

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
     * @description relationTestConfig
     *
     * @var array
     */
    public $relationTestConfig;

    /**
     * @description nodes
     *
     * @var array
     */
    public $nodes;
    protected $_name = [
        'name'               => 'Name',
        'id'                 => 'Id',
        'disabled'           => 'Disabled',
        'headers'            => 'Headers',
        'relationTestConfig' => 'RelationTestConfig',
        'nodes'              => 'Nodes',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('disabled', $this->disabled, true);
        Model::validateRequired('headers', $this->headers, true);
        Model::validateRequired('relationTestConfig', $this->relationTestConfig, true);
        Model::validateRequired('nodes', $this->nodes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->relationTestConfig) {
            $res['RelationTestConfig'] = $this->relationTestConfig;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['RelationTestConfig'])) {
            $model->relationTestConfig = $map['RelationTestConfig'];
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

        return $model;
    }
}
