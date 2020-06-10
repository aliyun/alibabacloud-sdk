<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\files;

use AlibabaCloud\Tea\Model;

class exportedParams extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description column
     *
     * @var string
     */
    public $column;
    protected $_name = [
        'name'   => 'Name',
        'column' => 'Column',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('column', $this->column, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exportedParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }

        return $model;
    }
}
