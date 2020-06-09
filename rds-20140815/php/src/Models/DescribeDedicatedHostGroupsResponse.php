<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse\dedicatedHostGroups;

class DescribeDedicatedHostGroupsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'dedicatedHostGroups' => 'DedicatedHostGroups',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dedicatedHostGroups', $this->dedicatedHostGroups, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DedicatedHostGroups'] = null !== $this->dedicatedHostGroups ? $this->dedicatedHostGroups->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDedicatedHostGroupsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DedicatedHostGroups'])){
            $model->dedicatedHostGroups = dedicatedHostGroups::fromMap($map['DedicatedHostGroups']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.itemList
     * @var dedicatedHostGroups
     */
    public $dedicatedHostGroups;

}
