<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretVersionIdsResponse\versionIds\versionId;

use AlibabaCloud\Tea\Model;

class versionStages extends Model
{
    /**
     * @description VersionStage
     *
     * @var array
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
        $res['VersionStage'] = [];
        if (null !== $this->versionStage) {
            $res['VersionStage'] = $this->versionStage;
        }

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
            if (!empty($map['VersionStage'])) {
                $model->versionStage = [];
                $model->versionStage = $map['VersionStage'];
            }
        }

        return $model;
    }
}
