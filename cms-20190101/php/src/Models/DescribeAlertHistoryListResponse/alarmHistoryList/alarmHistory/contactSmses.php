<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory;

use AlibabaCloud\Tea\Model;

class contactSmses extends Model
{
    /**
     * @description ContactSms
     *
     * @var array
     */
    public $contactSms;
    protected $_name = [
        'contactSms' => 'ContactSms',
    ];

    public function validate()
    {
        Model::validateRequired('contactSms', $this->contactSms, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactSms) {
            $res['ContactSms'] = [];
            if (null !== $this->contactSms) {
                $res['ContactSms'] = $this->contactSms;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactSmses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactSms'])) {
            if (!empty($map['ContactSms'])) {
                $model->contactSms = [];
                $model->contactSms = $map['ContactSms'];
            }
        }

        return $model;
    }
}
