// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryAvailableInstancesResponse : TeaModel {
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
        public QueryAvailableInstancesResponseData Data { get; set; }
        public class QueryAvailableInstancesResponseData : TeaModel {
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("InstanceList")]
            [Validation(Required=true)]
            public List<QueryAvailableInstancesResponseDataInstanceList> InstanceList { get; set; }
            public class QueryAvailableInstancesResponseDataInstanceList : TeaModel {
                    public long OwnerId { get; set; }
                    public long SellerId { get; set; }
                    public string ProductCode { get; set; }
                    public string ProductType { get; set; }
                    public string SubscriptionType { get; set; }
                    public string InstanceID { get; set; }
                    public string Region { get; set; }
                    public string CreateTime { get; set; }
                    public string EndTime { get; set; }
                    public string StopTime { get; set; }
                    public string ReleaseTime { get; set; }
                    public string ExpectedReleaseTime { get; set; }
                    public string Status { get; set; }
                    public string SubStatus { get; set; }
                    public string RenewStatus { get; set; }
                    public int? RenewalDuration { get; set; }
                    public string RenewalDurationUnit { get; set; }
                    public string Seller { get; set; }
            }
        };

    }

}
