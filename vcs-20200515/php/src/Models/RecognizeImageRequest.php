<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class RecognizeImageRequest extends Model
{
    /**
     * @description corpId
     *
     * @var string
     */
    public $corpId;

    /**
     * @description picContent
     *
     * @var string
     */
    public $picContent;

    /**
     * @description picFormat
     *
     * @var string
     */
    public $picFormat;
    protected $_name = [
        'corpId'     => 'CorpId',
        'picContent' => 'PicContent',
        'picFormat'  => 'PicFormat',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('picContent', $this->picContent, true);
        Model::validateRequired('picFormat', $this->picFormat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->picFormat) {
            $res['PicFormat'] = $this->picFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['PicFormat'])) {
            $model->picFormat = $map['PicFormat'];
        }

        return $model;
    }
}
