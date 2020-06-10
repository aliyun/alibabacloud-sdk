<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponse;

use AlibabaCloud\Tea\Model;

class registeredMediaList extends Model
{
    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description fileURL
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description newRegister
     *
     * @var bool
     */
    public $newRegister;
    protected $_name = [
        'mediaId'     => 'MediaId',
        'fileURL'     => 'FileURL',
        'newRegister' => 'NewRegister',
    ];

    public function validate()
    {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('fileURL', $this->fileURL, true);
        Model::validateRequired('newRegister', $this->newRegister, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->newRegister) {
            $res['NewRegister'] = $this->newRegister;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registeredMediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['NewRegister'])) {
            $model->newRegister = $map['NewRegister'];
        }

        return $model;
    }
}
