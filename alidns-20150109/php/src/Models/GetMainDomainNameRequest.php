<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetMainDomainNameRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'inputString' => 'InputString',
    ];
    public function validate() {
        Model::validateRequired('inputString', $this->inputString, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['InputString'] = $this->inputString;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMainDomainNameRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['InputString'])){
            $model->inputString = $map['InputString'];
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
     * @description commonName
     * @var string
     */
    public $inputString;

}
