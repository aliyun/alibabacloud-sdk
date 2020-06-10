<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateLDAPConfigRequest extends Model
{
    /**
     * @description volume
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description uri
     *
     * @var string
     */
    public $URI;

    /**
     * @description bindDN
     *
     * @var string
     */
    public $bindDN;

    /**
     * @description searchBase
     *
     * @var string
     */
    public $searchBase;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'URI'          => 'URI',
        'bindDN'       => 'BindDN',
        'searchBase'   => 'SearchBase',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('URI', $this->URI, true);
        Model::validateRequired('searchBase', $this->searchBase, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->bindDN) {
            $res['BindDN'] = $this->bindDN;
        }
        if (null !== $this->searchBase) {
            $res['SearchBase'] = $this->searchBase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLDAPConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['BindDN'])) {
            $model->bindDN = $map['BindDN'];
        }
        if (isset($map['SearchBase'])) {
            $model->searchBase = $map['SearchBase'];
        }

        return $model;
    }
}
