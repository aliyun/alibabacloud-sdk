<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\contactParameters;

use AlibabaCloud\Tea\Model;

class contactParameter extends Model
{
    /**
     * @description contactGroupName
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description level
     *
     * @var string
     */
    public $level;

    /**
     * @description id
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'level'            => 'Level',
        'id'               => 'Id',
    ];

    public function validate()
    {
        Model::validateRequired('contactGroupName', $this->contactGroupName, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('id', $this->id, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
