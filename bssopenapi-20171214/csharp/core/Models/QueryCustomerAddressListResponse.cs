// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryCustomerAddressListResponse : TeaModel {
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
        public QueryCustomerAddressListResponseData Data { get; set; }
        public class QueryCustomerAddressListResponseData : TeaModel {
            [NameInMap("CustomerInvoiceAddressList")]
            [Validation(Required=true)]
            public QueryCustomerAddressListResponseDataCustomerInvoiceAddressList CustomerInvoiceAddressList { get; set; }
            public class QueryCustomerAddressListResponseDataCustomerInvoiceAddressList : TeaModel {
                [NameInMap("CustomerInvoiceAddress")]
                [Validation(Required=true)]
                public List<QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress> CustomerInvoiceAddress { get; set; }
                public class QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress : TeaModel {
                    [NameInMap("Id")]
                    [Validation(Required=true)]
                    public long Id { get; set; }

                    [NameInMap("UserId")]
                    [Validation(Required=true)]
                    public long UserId { get; set; }

                    [NameInMap("UserNick")]
                    [Validation(Required=true)]
                    public string UserNick { get; set; }

                    [NameInMap("Addressee")]
                    [Validation(Required=true)]
                    public string Addressee { get; set; }

                    [NameInMap("Province")]
                    [Validation(Required=true)]
                    public string Province { get; set; }

                    [NameInMap("City")]
                    [Validation(Required=true)]
                    public string City { get; set; }

                    [NameInMap("County")]
                    [Validation(Required=true)]
                    public string County { get; set; }

                    [NameInMap("Street")]
                    [Validation(Required=true)]
                    public string Street { get; set; }

                    [NameInMap("PostalCode")]
                    [Validation(Required=true)]
                    public string PostalCode { get; set; }

                    [NameInMap("Phone")]
                    [Validation(Required=true)]
                    public string Phone { get; set; }

                    [NameInMap("BizType")]
                    [Validation(Required=true)]
                    public string BizType { get; set; }

                    [NameInMap("DeliveryAddress")]
                    [Validation(Required=true)]
                    public string DeliveryAddress { get; set; }

                }

            }
        };

    }

}
