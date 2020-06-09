<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetTxtRecordForVerifyRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'type' => 'Type',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['Type'] = $this->type;
        return $res;
    }
    /**
     * @param array $map
     * @return GetTxtRecordForVerifyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
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
     * @description type
     * @var string
     */
    public $type;

}
