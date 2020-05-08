<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextRequest;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description label
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'label' => 'Label',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Label'] = $this->label;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
