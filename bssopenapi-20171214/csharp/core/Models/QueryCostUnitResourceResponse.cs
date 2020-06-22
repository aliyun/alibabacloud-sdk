// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryCostUnitResourceResponse : TeaModel {
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
        public QueryCostUnitResourceResponseData Data { get; set; }
        public class QueryCostUnitResourceResponseData : TeaModel {
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("ResourceInstanceDtoList")]
            [Validation(Required=true)]
            public List<QueryCostUnitResourceResponseDataResourceInstanceDtoList> ResourceInstanceDtoList { get; set; }
            public class QueryCostUnitResourceResponseDataResourceInstanceDtoList : TeaModel {
                    public long ResourceUserId { get; set; }
                    public string ResourceId { get; set; }
                    public string CommodityCode { get; set; }
                    public string ResourceUserName { get; set; }
                    public string CommodityName { get; set; }
                    public string ResourceGroup { get; set; }
                    public string ResourceTag { get; set; }
                    public string ResourceNick { get; set; }
                    public string ResourceType { get; set; }
                    public string ResourceStatus { get; set; }
                    public string RelatedResources { get; set; }
                    public string ApportionCode { get; set; }
                    public string ApportionName { get; set; }
            }
            [NameInMap("CostUnit")]
            [Validation(Required=true)]
            public QueryCostUnitResourceResponseDataCostUnit CostUnit { get; set; }
            public class QueryCostUnitResourceResponseDataCostUnit : TeaModel {
                [NameInMap("OwnerUid")]
                [Validation(Required=true)]
                public long OwnerUid { get; set; }

                [NameInMap("ParentUnitId")]
                [Validation(Required=true)]
                public long ParentUnitId { get; set; }

                [NameInMap("UnitId")]
                [Validation(Required=true)]
                public long UnitId { get; set; }

                [NameInMap("UnitName")]
                [Validation(Required=true)]
                public string UnitName { get; set; }

            }
            [NameInMap("CostUnitStatisInfo")]
            [Validation(Required=true)]
            public QueryCostUnitResourceResponseDataCostUnitStatisInfo CostUnitStatisInfo { get; set; }
            public class QueryCostUnitResourceResponseDataCostUnitStatisInfo : TeaModel {
                [NameInMap("ResourceCount")]
                [Validation(Required=true)]
                public long ResourceCount { get; set; }

                [NameInMap("ResourceGroupCount")]
                [Validation(Required=true)]
                public long ResourceGroupCount { get; set; }

                [NameInMap("SubUnitCount")]
                [Validation(Required=true)]
                public long SubUnitCount { get; set; }

                [NameInMap("UserCount")]
                [Validation(Required=true)]
                public long UserCount { get; set; }

                [NameInMap("TotalResourceCount")]
                [Validation(Required=true)]
                public long TotalResourceCount { get; set; }

                [NameInMap("TotalUserCount")]
                [Validation(Required=true)]
                public long TotalUserCount { get; set; }

                [NameInMap("TotalResourceGroupCount")]
                [Validation(Required=true)]
                public long TotalResourceGroupCount { get; set; }

            }
        };

    }

}
