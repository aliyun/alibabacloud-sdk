<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\PutSecretValueResponse;

use AlibabaCloud\Tea\Model;

class versionStages extends Model
{
    /**
     * @description VersionStage
     *
     * @var string
     */
    public $versionStage;
    protected $_name = [
        'versionStage' => 'VersionStage',
    ];

    public function validate()
    {
        Model::validateRequired('versionStage', $this->versionStage, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['VersionStage'] = $this->versionStage;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionStages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionStage'])) {
            $model->versionStage = $map['VersionStage'];
        }

        return $model;
    }
}
