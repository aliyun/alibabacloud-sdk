<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ChangeDomainOfDnsProductRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'instanceId' => 'InstanceId',
        'newDomain' => 'NewDomain',
        'force' => 'Force',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['UserClientIp'] = $this->userClientIp;
        $res['InstanceId'] = $this->instanceId;
        $res['NewDomain'] = $this->newDomain;
        $res['Force'] = $this->force;
        return $res;
    }
    /**
     * @param array $map
     * @return ChangeDomainOfDnsProductRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['UserClientIp'])){
            $model->userClientIp = $map['UserClientIp'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['NewDomain'])){
            $model->newDomain = $map['NewDomain'];
        }
        if(isset($map['Force'])){
            $model->force = $map['Force'];
        }
        return $model;
    }
    /**
     * @description accessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description userClientIp
     * @var string
     */
    public $userClientIp;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description newDomain
     * @var string
     */
    public $newDomain;

    /**
     * @description force
     * @var bool
     */
    public $force;

}
