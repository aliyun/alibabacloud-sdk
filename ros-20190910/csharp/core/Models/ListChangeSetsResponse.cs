// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListChangeSetsResponse : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("ChangeSets")]
        [Validation(Required=true)]
        public List<ListChangeSetsResponseChangeSets> ChangeSets { get; set; }
        public class ListChangeSetsResponseChangeSets : TeaModel {
            [NameInMap("ChangeSetId")]
            [Validation(Required=true)]
            public string ChangeSetId { get; set; }

            [NameInMap("ChangeSetName")]
            [Validation(Required=true)]
            public string ChangeSetName { get; set; }

            [NameInMap("ChangeSetType")]
            [Validation(Required=true)]
            public string ChangeSetType { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("ExecutionStatus")]
            [Validation(Required=true)]
            public string ExecutionStatus { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("StackId")]
            [Validation(Required=true)]
            public string StackId { get; set; }

            [NameInMap("StackName")]
            [Validation(Required=true)]
            public string StackName { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

        }

    }

}
