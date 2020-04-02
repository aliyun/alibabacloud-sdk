<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results\subResults;

use AlibabaCloud\Tea\Model;

class hintWordsInfoList extends Model
{
    /**
     * @description Context
     *
     * @var string
     */
    public $context;
    protected $_name = [
        'context' => 'Context',
    ];

    public function validate()
    {
        Model::validateRequired('context', $this->context, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Context'] = $this->context;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hintWordsInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        return $model;
    }
}
