<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteSubDomainRecordsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'domainName' => 'DomainName',
        'RR' => 'RR',
        'type' => 'Type',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('RR', $this->RR, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['UserClientIp'] = $this->userClientIp;
        $res['DomainName'] = $this->domainName;
        $res['RR'] = $this->RR;
        $res['Type'] = $this->type;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteSubDomainRecordsRequest
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
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['RR'])){
            $model->RR = $map['RR'];
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
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description rr
     * @var string
     */
    public $RR;

    /**
     * @description type
     * @var string
     */
    public $type;

}
