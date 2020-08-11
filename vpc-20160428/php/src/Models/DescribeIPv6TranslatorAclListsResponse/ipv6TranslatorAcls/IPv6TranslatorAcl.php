<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponse\ipv6TranslatorAcls;

use AlibabaCloud\Tea\Model;

class IPv6TranslatorAcl extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclName;
    protected $_name = [
        'aclId'   => 'AclId',
        'aclName' => 'AclName',
    ];

    public function validate()
    {
        Model::validateRequired('aclId', $this->aclId, true);
        Model::validateRequired('aclName', $this->aclName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPv6TranslatorAcl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }

        return $model;
    }
}
