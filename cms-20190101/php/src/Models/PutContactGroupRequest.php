<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutContactGroupRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description desc
     *
     * @var string
     */
    public $describe;

    /**
     * @description contactNames
     *
     * @var array
     */
    public $contactNames;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'describe'         => 'Describe',
        'contactNames'     => 'ContactNames',
    ];

    public function validate()
    {
        Model::validateRequired('contactGroupName', $this->contactGroupName, true);
        Model::validateRequired('contactNames', $this->contactNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->contactNames) {
            $res['ContactNames'] = [];
            if (null !== $this->contactNames) {
                $res['ContactNames'] = $this->contactNames;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['ContactNames'])) {
            if (!empty($map['ContactNames'])) {
                $model->contactNames = [];
                $model->contactNames = $map['ContactNames'];
            }
        }

        return $model;
    }
}
