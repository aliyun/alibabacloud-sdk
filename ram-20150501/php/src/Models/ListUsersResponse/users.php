<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersResponse\users\user;

class users extends Model {
    protected $_name = [
        'user' => 'User',
    ];
    public function validate() {
        Model::validateRequired('user', $this->user, true);
    }
    public function toMap() {
        $res = [];
        $res['User'] = [];
        if(null !== $this->user && is_array($this->user)){
            $n = 0;
            foreach($this->user as $item){
                $res['User'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return users
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['User'])){
            if(!empty($map['User'])){
                $model->user = [];
                $n = 0;
                foreach($map['User'] as $item) {
                    $model->user[$n++] = null !== $item ? user::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description User
     * @var array
     */
    public $user;

}
