<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyIPv6TranslatorAclListEntryRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclEntryId;

    /**
     * @var string
     */
    public $aclEntryComment;
    protected $_name = [
        'regionId'        => 'RegionId',
        'aclId'           => 'AclId',
        'aclEntryId'      => 'AclEntryId',
        'aclEntryComment' => 'AclEntryComment',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('aclId', $this->aclId, true);
        Model::validateRequired('aclEntryId', $this->aclEntryId, true);
        Model::validateRequired('aclEntryComment', $this->aclEntryComment, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclEntryId) {
            $res['AclEntryId'] = $this->aclEntryId;
        }
        if (null !== $this->aclEntryComment) {
            $res['AclEntryComment'] = $this->aclEntryComment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIPv6TranslatorAclListEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclEntryId'])) {
            $model->aclEntryId = $map['AclEntryId'];
        }
        if (isset($map['AclEntryComment'])) {
            $model->aclEntryComment = $map['AclEntryComment'];
        }

        return $model;
    }
}
