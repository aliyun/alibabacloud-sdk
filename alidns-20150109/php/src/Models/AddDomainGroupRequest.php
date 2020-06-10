<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDomainGroupRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description groupName
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'lang'      => 'Lang',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDomainGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
