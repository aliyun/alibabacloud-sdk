<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'needDetailAttributes' => 'NeedDetailAttributes',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['NeedDetailAttributes'] = $this->needDetailAttributes;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainInfoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['NeedDetailAttributes'])){
            $model->needDetailAttributes = $map['NeedDetailAttributes'];
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
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description needDetailAttributes
     * @var bool
     */
    public $needDetailAttributes;

}
