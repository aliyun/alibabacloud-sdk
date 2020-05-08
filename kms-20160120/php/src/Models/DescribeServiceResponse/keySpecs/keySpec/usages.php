<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponse\keySpecs\keySpec;

use AlibabaCloud\Tea\Model;

class usages extends Model
{
    /**
     * @description Usage
     *
     * @var array
     */
    public $usage;
    protected $_name = [
        'usage' => 'Usage',
    ];

    public function validate()
    {
        Model::validateRequired('usage', $this->usage, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Usage'] = [];
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Usage'])) {
            if (!empty($map['Usage'])) {
                $model->usage = [];
                $model->usage = $map['Usage'];
            }
        }

        return $model;
    }
}
