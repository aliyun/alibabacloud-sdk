<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesResponse\aclEntries;

use AlibabaCloud\Tea\Model;

class aclEntry extends Model
{
    /**
     * @var string
     */
    public $aclEntryId;

    /**
     * @var string
     */
    public $aclEntryIp;

    /**
     * @var string
     */
    public $aclEntryComment;
    protected $_name = [
        'aclEntryId'      => 'AclEntryId',
        'aclEntryIp'      => 'AclEntryIp',
        'aclEntryComment' => 'AclEntryComment',
    ];

    public function validate()
    {
        Model::validateRequired('aclEntryId', $this->aclEntryId, true);
        Model::validateRequired('aclEntryIp', $this->aclEntryIp, true);
        Model::validateRequired('aclEntryComment', $this->aclEntryComment, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntryId) {
            $res['AclEntryId'] = $this->aclEntryId;
        }
        if (null !== $this->aclEntryIp) {
            $res['AclEntryIp'] = $this->aclEntryIp;
        }
        if (null !== $this->aclEntryComment) {
            $res['AclEntryComment'] = $this->aclEntryComment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntryId'])) {
            $model->aclEntryId = $map['AclEntryId'];
        }
        if (isset($map['AclEntryIp'])) {
            $model->aclEntryIp = $map['AclEntryIp'];
        }
        if (isset($map['AclEntryComment'])) {
            $model->aclEntryComment = $map['AclEntryComment'];
        }

        return $model;
    }
}
