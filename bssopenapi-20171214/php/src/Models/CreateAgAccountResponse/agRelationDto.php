<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponse;

use AlibabaCloud\Tea\Model;

class agRelationDto extends Model
{
    /**
     * @description pk
     *
     * @var string
     */
    public $pk;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description mpk
     *
     * @var string
     */
    public $mpk;

    /**
     * @description ramAdminRoleName
     *
     * @var string
     */
    public $ramAdminRoleName;
    protected $_name = [
        'pk'               => 'Pk',
        'type'             => 'Type',
        'mpk'              => 'Mpk',
        'ramAdminRoleName' => 'RamAdminRoleName',
    ];

    public function validate()
    {
        Model::validateRequired('pk', $this->pk, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('mpk', $this->mpk, true);
        Model::validateRequired('ramAdminRoleName', $this->ramAdminRoleName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }
        if (null !== $this->ramAdminRoleName) {
            $res['RamAdminRoleName'] = $this->ramAdminRoleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agRelationDto
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }
        if (isset($map['RamAdminRoleName'])) {
            $model->ramAdminRoleName = $map['RamAdminRoleName'];
        }

        return $model;
    }
}
