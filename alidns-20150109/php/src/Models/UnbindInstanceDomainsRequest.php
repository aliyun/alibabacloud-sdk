<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UnbindInstanceDomainsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'domainNames' => 'DomainNames',
        'instanceId' => 'InstanceId',
    ];
    public function validate() {
        Model::validateRequired('domainNames', $this->domainNames, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['DomainNames'] = $this->domainNames;
        $res['InstanceId'] = $this->instanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return UnbindInstanceDomainsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainNames'])){
            $model->domainNames = $map['DomainNames'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description domainNames
     * @var string
     */
    public $domainNames;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

}
