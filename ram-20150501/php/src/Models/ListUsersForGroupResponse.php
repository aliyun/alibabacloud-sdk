<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersForGroupResponse\users;

class ListUsersForGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'isTruncated' => 'IsTruncated',
        'marker' => 'Marker',
        'users' => 'Users',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isTruncated', $this->isTruncated, true);
        Model::validateRequired('marker', $this->marker, true);
        Model::validateRequired('users', $this->users, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['IsTruncated'] = $this->isTruncated;
        $res['Marker'] = $this->marker;
        $res['Users'] = null !== $this->users ? $this->users->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListUsersForGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['IsTruncated'])){
            $model->isTruncated = $map['IsTruncated'];
        }
        if(isset($map['Marker'])){
            $model->marker = $map['Marker'];
        }
        if(isset($map['Users'])){
            $model->users = users::fromMap($map['Users']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description IsTruncated
     * @var bool
     */
    public $isTruncated;

    /**
     * @description Marker
     * @var string
     */
    public $marker;

    /**
     * @description Users
     * @var users
     */
    public $users;

}
