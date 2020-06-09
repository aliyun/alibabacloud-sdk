<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ChangeDomainGroupRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'groupId' => 'GroupId',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['GroupId'] = $this->groupId;
        return $res;
    }
    /**
     * @param array $map
     * @return ChangeDomainGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description groupId
     * @var string
     */
    public $groupId;

}
