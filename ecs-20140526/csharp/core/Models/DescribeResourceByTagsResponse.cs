// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeResourceByTagsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public DescribeResourceByTagsResponseResources Resources { get; set; }
        public class DescribeResourceByTagsResponseResources : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeResourceByTagsResponseResourcesResource> Resource { get; set; }
            public class DescribeResourceByTagsResponseResourcesResource : TeaModel {
                    public string ResourceId { get; set; }
                    public string ResourceType { get; set; }
                    public string RegionId { get; set; }
            }
        };

    }

}
