<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLDAPConfigResponse;

use AlibabaCloud\Tea\Model;

class ldap extends Model {
    protected $_name = [
        'bindDN' => 'BindDN',
        'URI' => 'URI',
        'searchBase' => 'SearchBase',
    ];
    public function validate() {
        Model::validateRequired('bindDN', $this->bindDN, true);
        Model::validateRequired('URI', $this->URI, true);
        Model::validateRequired('searchBase', $this->searchBase, true);
    }
    public function toMap() {
        $res = [];
        $res['BindDN'] = $this->bindDN;
        $res['URI'] = $this->URI;
        $res['SearchBase'] = $this->searchBase;
        return $res;
    }
    /**
     * @param array $map
     * @return ldap
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BindDN'])){
            $model->bindDN = $map['BindDN'];
        }
        if(isset($map['URI'])){
            $model->URI = $map['URI'];
        }
        if(isset($map['SearchBase'])){
            $model->searchBase = $map['SearchBase'];
        }
        return $model;
    }
    /**
     * @description bindDN
     * @var string
     */
    public $bindDN;

    /**
     * @description uri
     * @var string
     */
    public $URI;

    /**
     * @description searchBase
     * @var string
     */
    public $searchBase;

}
