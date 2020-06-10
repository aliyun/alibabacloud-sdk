<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactGroupRequest extends Model
{
    /**
     * @description contactGroupName
     *
     * @var string
     */
    public $contactGroupName;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
    ];

    public function validate()
    {
        Model::validateRequired('contactGroupName', $this->contactGroupName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }

        return $model;
    }
}
