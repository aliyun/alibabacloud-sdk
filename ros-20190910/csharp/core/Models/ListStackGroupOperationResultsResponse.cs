// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackGroupOperationResultsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("StackGroupOperationResults")]
        [Validation(Required=true)]
        public List<ListStackGroupOperationResultsResponseStackGroupOperationResults> StackGroupOperationResults { get; set; }
        public class ListStackGroupOperationResultsResponseStackGroupOperationResults : TeaModel {
            [NameInMap("AccountId")]
            [Validation(Required=true)]
            public string AccountId { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("StatusReason")]
            [Validation(Required=true)]
            public string StatusReason { get; set; }

        }

    }

}
