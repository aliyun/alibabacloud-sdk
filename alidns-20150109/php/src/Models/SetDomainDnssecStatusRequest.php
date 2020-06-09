<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDomainDnssecStatusRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return SetDomainDnssecStatusRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
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
     * @description status
     * @var string
     */
    public $status;

}
