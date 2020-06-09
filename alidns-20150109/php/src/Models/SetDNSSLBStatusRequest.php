<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDNSSLBStatusRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'subDomain' => 'SubDomain',
        'open' => 'Open',
        'domainName' => 'DomainName',
        'type' => 'Type',
    ];
    public function validate() {
        Model::validateRequired('subDomain', $this->subDomain, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['UserClientIp'] = $this->userClientIp;
        $res['SubDomain'] = $this->subDomain;
        $res['Open'] = $this->open;
        $res['DomainName'] = $this->domainName;
        $res['Type'] = $this->type;
        return $res;
    }
    /**
     * @param array $map
     * @return SetDNSSLBStatusRequest
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
        if(isset($map['SubDomain'])){
            $model->subDomain = $map['SubDomain'];
        }
        if(isset($map['Open'])){
            $model->open = $map['Open'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
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
     * @description subDomain
     * @var string
     */
    public $subDomain;

    /**
     * @description open
     * @var bool
     */
    public $open;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description type
     * @var string
     */
    public $type;

}
