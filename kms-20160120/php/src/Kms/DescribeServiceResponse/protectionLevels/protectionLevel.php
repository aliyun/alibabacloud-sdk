<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeServiceResponse\protectionLevels;

use AlibabaCloud\Tea\Model;

class protectionLevel extends Model
{
    /**
     * @description Type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['Type'] = $this->type;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protectionLevel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
