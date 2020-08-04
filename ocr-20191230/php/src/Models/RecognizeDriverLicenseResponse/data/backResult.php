<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    /**
     * @var string
     */
    public $archiveNumber;
    protected $_name = [
        'archiveNumber' => 'ArchiveNumber',
    ];

    public function validate()
    {
        Model::validateRequired('archiveNumber', $this->archiveNumber, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveNumber) {
            $res['ArchiveNumber'] = $this->archiveNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveNumber'])) {
            $model->archiveNumber = $map['ArchiveNumber'];
        }

        return $model;
    }
}
