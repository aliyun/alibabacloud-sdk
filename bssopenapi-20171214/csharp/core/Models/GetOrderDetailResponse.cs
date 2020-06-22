// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class GetOrderDetailResponse : TeaModel {
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
        public GetOrderDetailResponseData Data { get; set; }
        public class GetOrderDetailResponseData : TeaModel {
            [NameInMap("HostName")]
            [Validation(Required=true)]
            public string HostName { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("OrderList")]
            [Validation(Required=true)]
            public GetOrderDetailResponseDataOrderList OrderList { get; set; }
            public class GetOrderDetailResponseDataOrderList : TeaModel {
                [NameInMap("Order")]
                [Validation(Required=true)]
                public List<GetOrderDetailResponseDataOrderListOrder> Order { get; set; }
                public class GetOrderDetailResponseDataOrderListOrder : TeaModel {
                    [NameInMap("OrderId")]
                    [Validation(Required=true)]
                    public string OrderId { get; set; }

                    [NameInMap("SubOrderId")]
                    [Validation(Required=true)]
                    public string SubOrderId { get; set; }

                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                    [NameInMap("OrderType")]
                    [Validation(Required=true)]
                    public string OrderType { get; set; }

                    [NameInMap("CreateTime")]
                    [Validation(Required=true)]
                    public string CreateTime { get; set; }

                    [NameInMap("PaymentTime")]
                    [Validation(Required=true)]
                    public string PaymentTime { get; set; }

                    [NameInMap("PaymentStatus")]
                    [Validation(Required=true)]
                    public string PaymentStatus { get; set; }

                    [NameInMap("Region")]
                    [Validation(Required=true)]
                    public string Region { get; set; }

                    [NameInMap("Config")]
                    [Validation(Required=true)]
                    public string Config { get; set; }

                    [NameInMap("Quantity")]
                    [Validation(Required=true)]
                    public string Quantity { get; set; }

                    [NameInMap("UsageStartTime")]
                    [Validation(Required=true)]
                    public string UsageStartTime { get; set; }

                    [NameInMap("UsageEndTime")]
                    [Validation(Required=true)]
                    public string UsageEndTime { get; set; }

                    [NameInMap("InstanceIDs")]
                    [Validation(Required=true)]
                    public string InstanceIDs { get; set; }

                    [NameInMap("PretaxGrossAmount")]
                    [Validation(Required=true)]
                    public string PretaxGrossAmount { get; set; }

                    [NameInMap("PretaxAmount")]
                    [Validation(Required=true)]
                    public string PretaxAmount { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("PretaxAmountLocal")]
                    [Validation(Required=true)]
                    public string PretaxAmountLocal { get; set; }

                    [NameInMap("Tax")]
                    [Validation(Required=true)]
                    public string Tax { get; set; }

                    [NameInMap("AfterTaxAmount")]
                    [Validation(Required=true)]
                    public string AfterTaxAmount { get; set; }

                    [NameInMap("PaymentCurrency")]
                    [Validation(Required=true)]
                    public string PaymentCurrency { get; set; }

                    [NameInMap("Operator")]
                    [Validation(Required=true)]
                    public string Operator { get; set; }

                    [NameInMap("RelatedOrderId")]
                    [Validation(Required=true)]
                    public string RelatedOrderId { get; set; }

                    [NameInMap("OrderSubType")]
                    [Validation(Required=true)]
                    public string OrderSubType { get; set; }

                    [NameInMap("OriginalConfig")]
                    [Validation(Required=true)]
                    public string OriginalConfig { get; set; }

                }

            }
        };

    }

}
