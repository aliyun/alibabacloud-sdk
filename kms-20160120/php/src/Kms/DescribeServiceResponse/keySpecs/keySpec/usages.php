<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeServiceResponse\keySpecs\keySpec;

use AlibabaCloud\Tea\Model;

class usages extends Model
{
    /**
     * @description Usage
     *
     * @var string
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
        $res['Usage'] = $this->usage;

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
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
