<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomLinesRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description lineIds
     *
     * @var string
     */
    public $lineIds;
    protected $_name = [
        'lang'    => 'Lang',
        'lineIds' => 'LineIds',
    ];

    public function validate()
    {
        Model::validateRequired('lineIds', $this->lineIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lineIds) {
            $res['LineIds'] = $this->lineIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomLinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LineIds'])) {
            $model->lineIds = $map['LineIds'];
        }

        return $model;
    }
}
