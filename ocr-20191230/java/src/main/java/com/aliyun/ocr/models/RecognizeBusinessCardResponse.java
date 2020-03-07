// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeBusinessCardResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeBusinessCardResponseData data;

    public static RecognizeBusinessCardResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeBusinessCardResponse self = new RecognizeBusinessCardResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeBusinessCardResponseDataCompanies extends TeaModel {
        @NameInMap("Company")
        @Validation(required = true)
        public String company;

        public static RecognizeBusinessCardResponseDataCompanies build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseDataCompanies self = new RecognizeBusinessCardResponseDataCompanies();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeBusinessCardResponseDataDepartments extends TeaModel {
        @NameInMap("Department")
        @Validation(required = true)
        public String department;

        public static RecognizeBusinessCardResponseDataDepartments build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseDataDepartments self = new RecognizeBusinessCardResponseDataDepartments();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeBusinessCardResponseDataTitles extends TeaModel {
        @NameInMap("Title")
        @Validation(required = true)
        public String title;

        public static RecognizeBusinessCardResponseDataTitles build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseDataTitles self = new RecognizeBusinessCardResponseDataTitles();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeBusinessCardResponseDataCellPhoneNumbers extends TeaModel {
        @NameInMap("CellPhoneNumber")
        @Validation(required = true)
        public String cellPhoneNumber;

        public static RecognizeBusinessCardResponseDataCellPhoneNumbers build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseDataCellPhoneNumbers self = new RecognizeBusinessCardResponseDataCellPhoneNumbers();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeBusinessCardResponseDataOfficePhoneNumbers extends TeaModel {
        @NameInMap("OfficePhoneNumber")
        @Validation(required = true)
        public String officePhoneNumber;

        public static RecognizeBusinessCardResponseDataOfficePhoneNumbers build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseDataOfficePhoneNumbers self = new RecognizeBusinessCardResponseDataOfficePhoneNumbers();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeBusinessCardResponseDataAddresses extends TeaModel {
        @NameInMap("Address")
        @Validation(required = true)
        public String address;

        public static RecognizeBusinessCardResponseDataAddresses build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseDataAddresses self = new RecognizeBusinessCardResponseDataAddresses();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeBusinessCardResponseDataEmails extends TeaModel {
        @NameInMap("Email")
        @Validation(required = true)
        public String email;

        public static RecognizeBusinessCardResponseDataEmails build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseDataEmails self = new RecognizeBusinessCardResponseDataEmails();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeBusinessCardResponseData extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Companies")
        @Validation(required = true)
        public java.util.List<RecognizeBusinessCardResponseDataCompanies> companies;

        @NameInMap("Departments")
        @Validation(required = true)
        public java.util.List<RecognizeBusinessCardResponseDataDepartments> departments;

        @NameInMap("Titles")
        @Validation(required = true)
        public java.util.List<RecognizeBusinessCardResponseDataTitles> titles;

        @NameInMap("CellPhoneNumbers")
        @Validation(required = true)
        public java.util.List<RecognizeBusinessCardResponseDataCellPhoneNumbers> cellPhoneNumbers;

        @NameInMap("OfficePhoneNumbers")
        @Validation(required = true)
        public java.util.List<RecognizeBusinessCardResponseDataOfficePhoneNumbers> officePhoneNumbers;

        @NameInMap("Addresses")
        @Validation(required = true)
        public java.util.List<RecognizeBusinessCardResponseDataAddresses> addresses;

        @NameInMap("Emails")
        @Validation(required = true)
        public java.util.List<RecognizeBusinessCardResponseDataEmails> emails;

        public static RecognizeBusinessCardResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeBusinessCardResponseData self = new RecognizeBusinessCardResponseData();
            return TeaModel.build(map, self);
        }

    }

}
