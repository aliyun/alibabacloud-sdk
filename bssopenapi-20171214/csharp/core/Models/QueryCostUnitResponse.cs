// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryCostUnitResponse : TeaModel {
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
        public QueryCostUnitResponseData Data { get; set; }
        public class QueryCostUnitResponseData : TeaModel {
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("CostUnitDtoList")]
            [Validation(Required=true)]
            public List<QueryCostUnitResponseDataCostUnitDtoList> CostUnitDtoList { get; set; }
            public class QueryCostUnitResponseDataCostUnitDtoList : TeaModel {
                    public long OwnerUid { get; set; }
                    public long ParentUnitId { get; set; }
                    public long UnitId { get; set; }
                    public string UnitName { get; set; }
            }
        };

    }

}
