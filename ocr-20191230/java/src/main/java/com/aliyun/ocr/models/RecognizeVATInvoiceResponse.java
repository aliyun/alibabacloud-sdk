// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeVATInvoiceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeVATInvoiceResponseData data;

    public static RecognizeVATInvoiceResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeVATInvoiceResponse self = new RecognizeVATInvoiceResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeVATInvoiceResponseDataContent extends TeaModel {
        @NameInMap("InvoiceCode")
        @Validation(required = true)
        public String invoiceCode;

        @NameInMap("InvoiceNo")
        @Validation(required = true)
        public String invoiceNo;

        @NameInMap("InvoiceDate")
        @Validation(required = true)
        public String invoiceDate;

        @NameInMap("AntiFakeCode")
        @Validation(required = true)
        public String antiFakeCode;

        @NameInMap("PayerName")
        @Validation(required = true)
        public String payerName;

        @NameInMap("PayerRegisterNo")
        @Validation(required = true)
        public String payerRegisterNo;

        @NameInMap("PayerAddress")
        @Validation(required = true)
        public String payerAddress;

        @NameInMap("PayerBankName")
        @Validation(required = true)
        public String payerBankName;

        @NameInMap("WithoutTaxAmount")
        @Validation(required = true)
        public String withoutTaxAmount;

        @NameInMap("TaxAmount")
        @Validation(required = true)
        public String taxAmount;

        @NameInMap("SumAmount")
        @Validation(required = true)
        public String sumAmount;

        @NameInMap("InvoiceAmount")
        @Validation(required = true)
        public String invoiceAmount;

        @NameInMap("PayeeName")
        @Validation(required = true)
        public String payeeName;

        @NameInMap("PayeeRegisterNo")
        @Validation(required = true)
        public String payeeRegisterNo;

        @NameInMap("PayeeAddress")
        @Validation(required = true)
        public String payeeAddress;

        @NameInMap("PayeeBankName")
        @Validation(required = true)
        public String payeeBankName;

        @NameInMap("Payee")
        @Validation(required = true)
        public String payee;

        @NameInMap("Checker")
        @Validation(required = true)
        public String checker;

        @NameInMap("Clerk")
        @Validation(required = true)
        public String clerk;

        public static RecognizeVATInvoiceResponseDataContent build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataContent self = new RecognizeVATInvoiceResponseDataContent();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBox extends TeaModel {
        public static RecognizeVATInvoiceResponseDataBox build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBox self = new RecognizeVATInvoiceResponseDataBox();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseData extends TeaModel {
        @NameInMap("Content")
        @Validation(required = true)
        public RecognizeVATInvoiceResponseDataContent content;

        @NameInMap("Box")
        @Validation(required = true)
        public RecognizeVATInvoiceResponseDataBox box;

        public static RecognizeVATInvoiceResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseData self = new RecognizeVATInvoiceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
