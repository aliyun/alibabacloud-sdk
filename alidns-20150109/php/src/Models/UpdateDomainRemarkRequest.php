<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRemarkRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'remark' => 'Remark',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['Remark'] = $this->remark;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateDomainRemarkRequest
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
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
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
     * @description remark
     * @var string
     */
    public $remark;

}
