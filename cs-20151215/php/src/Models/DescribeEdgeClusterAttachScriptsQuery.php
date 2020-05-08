<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeClusterAttachScriptsQuery extends Model
{
    /**
     * @description NamePrefix
     *
     * @var string
     */
    public $namePrefix;
    protected $_name = [
        'namePrefix' => 'NamePrefix',
    ];

    public function validate()
    {
        Model::validateRequired('namePrefix', $this->namePrefix, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['NamePrefix'] = $this->namePrefix;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeClusterAttachScriptsQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }

        return $model;
    }
}
