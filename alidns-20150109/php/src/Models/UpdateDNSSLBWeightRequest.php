<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDNSSLBWeightRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'recordId' => 'RecordId',
        'weight' => 'Weight',
    ];
    public function validate() {
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('weight', $this->weight, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['UserClientIp'] = $this->userClientIp;
        $res['RecordId'] = $this->recordId;
        $res['Weight'] = $this->weight;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateDNSSLBWeightRequest
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
        if(isset($map['RecordId'])){
            $model->recordId = $map['RecordId'];
        }
        if(isset($map['Weight'])){
            $model->weight = $map['Weight'];
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
     * @description rrId
     * @var string
     */
    public $recordId;

    /**
     * @description weight
     * @var integer
     */
    public $weight;

}
