<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessCardResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description company
     *
     * @var array
     */
    public $companies;

    /**
     * @description department
     *
     * @var array
     */
    public $departments;

    /**
     * @description title
     *
     * @var array
     */
    public $titles;

    /**
     * @description cellNumber
     *
     * @var array
     */
    public $cellPhoneNumbers;

    /**
     * @description officePhoneNumber
     *
     * @var array
     */
    public $officePhoneNumbers;

    /**
     * @description address
     *
     * @var array
     */
    public $addresses;

    /**
     * @description email
     *
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
        $res              = [];
        $res['Name']      = $this->name;
        $res['Companies'] = [];
        if (null !== $this->companies) {
            $res['Companies'] = $this->companies;
        }
        $res['Departments'] = [];
        if (null !== $this->departments) {
            $res['Departments'] = $this->departments;
        }
        $res['Titles'] = [];
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
        }
        $res['CellPhoneNumbers'] = [];
        if (null !== $this->cellPhoneNumbers) {
            $res['CellPhoneNumbers'] = $this->cellPhoneNumbers;
        }
        $res['OfficePhoneNumbers'] = [];
        if (null !== $this->officePhoneNumbers) {
            $res['OfficePhoneNumbers'] = $this->officePhoneNumbers;
        }
        $res['Addresses'] = [];
        if (null !== $this->addresses) {
            $res['Addresses'] = $this->addresses;
        }
        $res['Emails'] = [];
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
                $model->companies = [];
                $model->companies = $map['Companies'];
            }
        }
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = [];
                $model->departments = $map['Departments'];
            }
        }
        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = [];
                $model->titles = $map['Titles'];
            }
        }
        if (isset($map['CellPhoneNumbers'])) {
            if (!empty($map['CellPhoneNumbers'])) {
                $model->cellPhoneNumbers = [];
                $model->cellPhoneNumbers = $map['CellPhoneNumbers'];
            }
        }
        if (isset($map['OfficePhoneNumbers'])) {
            if (!empty($map['OfficePhoneNumbers'])) {
                $model->officePhoneNumbers = [];
                $model->officePhoneNumbers = $map['OfficePhoneNumbers'];
            }
        }
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $model->addresses = $map['Addresses'];
            }
        }
        if (isset($map['Emails'])) {
            if (!empty($map['Emails'])) {
                $model->emails = [];
                $model->emails = $map['Emails'];
            }
        }

        return $model;
    }
}
