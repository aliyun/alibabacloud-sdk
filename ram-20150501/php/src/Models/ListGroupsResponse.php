<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsResponse\groups;

class ListGroupsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'isTruncated' => 'IsTruncated',
        'marker' => 'Marker',
        'groups' => 'Groups',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isTruncated', $this->isTruncated, true);
        Model::validateRequired('marker', $this->marker, true);
        Model::validateRequired('groups', $this->groups, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['IsTruncated'] = $this->isTruncated;
        $res['Marker'] = $this->marker;
        $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListGroupsResponse
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
        if(isset($map['Groups'])){
            $model->groups = groups::fromMap($map['Groups']);
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
     * @description Groups
     * @var groups
     */
    public $groups;

}
