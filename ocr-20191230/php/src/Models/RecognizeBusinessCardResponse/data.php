<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessCardResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $companies;

    /**
     * @var array
     */
    public $departments;

    /**
     * @var array
     */
    public $titles;

    /**
     * @var array
     */
    public $cellPhoneNumbers;

    /**
     * @var array
     */
    public $officePhoneNumbers;

    /**
     * @var array
     */
    public $addresses;

    /**
     * @var array
     */
    public $emails;
    protected $_name = [
        'name'               => 'Name',
        'companies'          => 'Companies',
        'departments'        => 'Departments',
        'titles'             => 'Titles',
        'cellPhoneNumbers'   => 'CellPhoneNumbers',
        'officePhoneNumbers' => 'OfficePhoneNumbers',
        'addresses'          => 'Addresses',
        'emails'             => 'Emails',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('companies', $this->companies, true);
        Model::validateRequired('departments', $this->departments, true);
        Model::validateRequired('titles', $this->titles, true);
        Model::validateRequired('cellPhoneNumbers', $this->cellPhoneNumbers, true);
        Model::validateRequired('officePhoneNumbers', $this->officePhoneNumbers, true);
        Model::validateRequired('addresses', $this->addresses, true);
        Model::validateRequired('emails', $this->emails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->companies) {
            $res['Companies'] = $this->companies;
        }
        if (null !== $this->departments) {
            $res['Departments'] = $this->departments;
        }
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
        }
        if (null !== $this->cellPhoneNumbers) {
            $res['CellPhoneNumbers'] = $this->cellPhoneNumbers;
        }
        if (null !== $this->officePhoneNumbers) {
            $res['OfficePhoneNumbers'] = $this->officePhoneNumbers;
        }
        if (null !== $this->addresses) {
            $res['Addresses'] = $this->addresses;
        }
        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Companies'])) {
            if (!empty($map['Companies'])) {
                $model->companies = $map['Companies'];
            }
        }
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = $map['Departments'];
            }
        }
        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = $map['Titles'];
            }
        }
        if (isset($map['CellPhoneNumbers'])) {
            if (!empty($map['CellPhoneNumbers'])) {
                $model->cellPhoneNumbers = $map['CellPhoneNumbers'];
            }
        }
        if (isset($map['OfficePhoneNumbers'])) {
            if (!empty($map['OfficePhoneNumbers'])) {
                $model->officePhoneNumbers = $map['OfficePhoneNumbers'];
            }
        }
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = $map['Addresses'];
            }
        }
        if (isset($map['Emails'])) {
            if (!empty($map['Emails'])) {
                $model->emails = $map['Emails'];
            }
        }

        return $model;
    }
}
