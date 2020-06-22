// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryInvoicingCustomerListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public QueryInvoicingCustomerListResponseData Data { get; set; }
        public class QueryInvoicingCustomerListResponseData : TeaModel {
            [NameInMap("CustomerInvoiceList")]
            [Validation(Required=true)]
            public QueryInvoicingCustomerListResponseDataCustomerInvoiceList CustomerInvoiceList { get; set; }
            public class QueryInvoicingCustomerListResponseDataCustomerInvoiceList : TeaModel {
                [NameInMap("CustomerInvoice")]
                [Validation(Required=true)]
                public List<QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice> CustomerInvoice { get; set; }
                public class QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice : TeaModel {
                    [NameInMap("Id")]
                    [Validation(Required=true)]
                    public long Id { get; set; }

                    [NameInMap("UserId")]
                    [Validation(Required=true)]
                    public long UserId { get; set; }

                    [NameInMap("UserNick")]
                    [Validation(Required=true)]
                    public string UserNick { get; set; }

                    [NameInMap("InvoiceTitle")]
                    [Validation(Required=true)]
                    public string InvoiceTitle { get; set; }

                    [NameInMap("CustomerType")]
                    [Validation(Required=true)]
                    public long CustomerType { get; set; }

                    [NameInMap("TaxpayerType")]
                    [Validation(Required=true)]
                    public long TaxpayerType { get; set; }

                    [NameInMap("Bank")]
                    [Validation(Required=true)]
                    public string Bank { get; set; }

                    [NameInMap("BankNo")]
                    [Validation(Required=true)]
                    public string BankNo { get; set; }

                    [NameInMap("OperatingLicenseAddress")]
                    [Validation(Required=true)]
                    public string OperatingLicenseAddress { get; set; }

                    [NameInMap("OperatingLicensePhone")]
                    [Validation(Required=true)]
                    public string OperatingLicensePhone { get; set; }

                    [NameInMap("RegisterNo")]
                    [Validation(Required=true)]
                    public string RegisterNo { get; set; }

                    [NameInMap("StartCycle")]
                    [Validation(Required=true)]
                    public long StartCycle { get; set; }

                    [NameInMap("Status")]
                    [Validation(Required=true)]
                    public long Status { get; set; }

                    [NameInMap("GmtCreate")]
                    [Validation(Required=true)]
                    public string GmtCreate { get; set; }

                    [NameInMap("TaxationLicense")]
                    [Validation(Required=true)]
                    public string TaxationLicense { get; set; }

                    [NameInMap("AdjustType")]
                    [Validation(Required=true)]
                    public long AdjustType { get; set; }

                    [NameInMap("EndCycle")]
                    [Validation(Required=true)]
                    public long EndCycle { get; set; }

                    [NameInMap("TitleChangeInstructions")]
                    [Validation(Required=true)]
                    public string TitleChangeInstructions { get; set; }

                    [NameInMap("IssueType")]
                    [Validation(Required=true)]
                    public long IssueType { get; set; }

                    [NameInMap("Type")]
                    [Validation(Required=true)]
                    public long Type { get; set; }

                    [NameInMap("DefaultRemark")]
                    [Validation(Required=true)]
                    public string DefaultRemark { get; set; }

                }

            }
        };

    }

}
