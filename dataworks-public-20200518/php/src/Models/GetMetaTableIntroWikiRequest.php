<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableIntroWikiRequest extends Model
{
    /**
     * @description tableGuid
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description wikiVersion
     *
     * @var int
     */
    public $wikiVersion;
    protected $_name = [
        'tableGuid'   => 'TableGuid',
        'wikiVersion' => 'WikiVersion',
    ];

    public function validate()
    {
        Model::validateRequired('tableGuid', $this->tableGuid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->wikiVersion) {
            $res['WikiVersion'] = $this->wikiVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableIntroWikiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['WikiVersion'])) {
            $model->wikiVersion = $map['WikiVersion'];
        }

        return $model;
    }
}
