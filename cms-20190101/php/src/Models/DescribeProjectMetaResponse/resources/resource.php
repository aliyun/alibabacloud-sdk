<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaResponse\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description project
     *
     * @var string
     */
    public $namespace;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description labels
     *
     * @var string
     */
    public $labels;
    protected $_name = [
        'namespace'   => 'Namespace',
        'description' => 'Description',
        'labels'      => 'Labels',
    ];

    public function validate()
    {
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('labels', $this->labels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}
