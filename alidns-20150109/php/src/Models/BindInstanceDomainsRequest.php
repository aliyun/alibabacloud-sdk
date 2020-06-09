<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class BindInstanceDomainsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'instanceId' => 'InstanceId',
        'domainNames' => 'DomainNames',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('domainNames', $this->domainNames, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['InstanceId'] = $this->instanceId;
        $res['DomainNames'] = $this->domainNames;
        return $res;
    }
    /**
     * @param array $map
     * @return BindInstanceDomainsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['DomainNames'])){
            $model->domainNames = $map['DomainNames'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description domainNames
     * @var string
     */
    public $domainNames;

}
