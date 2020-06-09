<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLDAPConfigResponse\ldap;

class DescribeLDAPConfigResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'ldap' => 'Ldap',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ldap', $this->ldap, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Ldap'] = null !== $this->ldap ? $this->ldap->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeLDAPConfigResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Ldap'])){
            $model->ldap = ldap::fromMap($map['Ldap']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var ldap
     */
    public $ldap;

}
