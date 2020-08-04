// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeTagsRequest : TeaModel {
        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=false)]
        public string ResourceType { get; set; }

        [NameInMap("ResourceId")]
        [Validation(Required=false)]
        public string ResourceId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<DescribeTagsRequestTag> Tag { get; set; }
        public class DescribeTagsRequestTag : TeaModel {
            [NameInMap("value")]
            [Validation(Required=true)]
            public string Value { get; set; }

            [NameInMap("key")]
            [Validation(Required=true)]
            public string Key { get; set; }

        }

        [NameInMap("Category")]
        [Validation(Required=false)]
        public string Category { get; set; }

    }

}
