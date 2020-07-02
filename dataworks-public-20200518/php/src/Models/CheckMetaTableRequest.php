<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CheckMetaTableRequest extends Model
{
    /**
     * @description tableGuid
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'tableGuid' => 'TableGuid',
    ];

    public function validate()
    {
        Model::validateRequired('tableGuid', $this->tableGuid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMetaTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
