<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory;

use AlibabaCloud\Tea\Model;

class contactMails extends Model
{
    /**
     * @description ContactMail
     *
     * @var array
     */
    public $contactMail;
    protected $_name = [
        'contactMail' => 'ContactMail',
    ];

    public function validate()
    {
        Model::validateRequired('contactMail', $this->contactMail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactMail) {
            $res['ContactMail'] = [];
            if (null !== $this->contactMail) {
                $res['ContactMail'] = $this->contactMail;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactMails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactMail'])) {
            if (!empty($map['ContactMail'])) {
                $model->contactMail = [];
                $model->contactMail = $map['ContactMail'];
            }
        }

        return $model;
    }
}
