<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeClusterAttachScriptsBody\options;
use AlibabaCloud\Tea\Model;

class DescribeEdgeClusterAttachScriptsBody extends Model
{
    /**
     * @description options
     *
     * @var DescribeEdgeClusterAttachScriptsBody.options
     */
    public $options;
    protected $_name = [
        'options' => 'options',
    ];

    public function validate()
    {
        Model::validateRequired('options', $this->options, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['options'] = null !== $this->options ? $this->options->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeClusterAttachScriptsBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['options'])) {
            $model->options = options::fromMap($map['options']);
        }

        return $model;
    }
}
