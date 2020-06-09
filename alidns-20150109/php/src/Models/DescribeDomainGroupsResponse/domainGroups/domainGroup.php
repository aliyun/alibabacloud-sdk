<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponse\domainGroups;

use AlibabaCloud\Tea\Model;

class domainGroup extends Model {
    protected $_name = [
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'domainCount' => 'DomainCount',
    ];
    public function validate() {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('domainCount', $this->domainCount, true);
    }
    public function toMap() {
        $res = [];
        $res['GroupId'] = $this->groupId;
        $res['GroupName'] = $this->groupName;
        $res['DomainCount'] = $this->domainCount;
        return $res;
    }
    /**
     * @param array $map
     * @return domainGroup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        if(isset($map['DomainCount'])){
            $model->domainCount = $map['DomainCount'];
        }
        return $model;
    }
    /**
     * @description groupId
     * @var string
     */
    public $groupId;

    /**
     * @description groupName
     * @var string
     */
    public $groupName;

    /**
     * @description domainCount
     * @var integer
     */
    public $domainCount;

}
