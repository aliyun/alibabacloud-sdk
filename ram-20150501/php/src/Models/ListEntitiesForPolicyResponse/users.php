<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponse\users\user;
use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description User
     *
     * @var array
     */
    public $user;
    protected $_name = [
        'user' => 'User',
    ];

    public function validate()
    {
        Model::validateRequired('user', $this->user, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->user) {
            $res['User'] = [];
            if (null !== $this->user && \is_array($this->user)) {
                $n = 0;
                foreach ($this->user as $item) {
                    $res['User'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['User'])) {
            if (!empty($map['User'])) {
                $model->user = [];
                $n           = 0;
                foreach ($map['User'] as $item) {
                    $model->user[$n++] = null !== $item ? user::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
