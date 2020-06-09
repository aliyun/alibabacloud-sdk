<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRecordRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'recordId' => 'RecordId',
        'RR' => 'RR',
        'type' => 'Type',
        'value' => 'Value',
        'TTL' => 'TTL',
        'priority' => 'Priority',
        'line' => 'Line',
    ];
    public function validate() {
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('RR', $this->RR, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('value', $this->value, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['UserClientIp'] = $this->userClientIp;
        $res['RecordId'] = $this->recordId;
        $res['RR'] = $this->RR;
        $res['Type'] = $this->type;
        $res['Value'] = $this->value;
        $res['TTL'] = $this->TTL;
        $res['Priority'] = $this->priority;
        $res['Line'] = $this->line;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateDomainRecordRequest
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
        if(isset($map['RR'])){
            $model->RR = $map['RR'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['TTL'])){
            $model->TTL = $map['TTL'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        if(isset($map['Line'])){
            $model->line = $map['Line'];
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
     * @description rr
     * @var string
     */
    public $RR;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description ttl
     * @var integer
     */
    public $TTL;

    /**
     * @description priority
     * @var integer
     */
    public $priority;

    /**
     * @description line
     * @var string
     */
    public $line;

}
