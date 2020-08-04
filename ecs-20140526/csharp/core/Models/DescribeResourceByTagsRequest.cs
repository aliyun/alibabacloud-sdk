// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeResourceByTagsRequest : TeaModel {
        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=false)]
        public string ResourceType { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<DescribeResourceByTagsRequestTag> Tag { get; set; }
        public class DescribeResourceByTagsRequestTag : TeaModel {
            [NameInMap("value")]
            [Validation(Required=true)]
            public string Value { get; set; }

            [NameInMap("key")]
            [Validation(Required=true)]
            public string Key { get; set; }

        }

    }

}
