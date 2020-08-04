// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ListTagResourcesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NextToken")]
        [Validation(Required=true)]
        public string NextToken { get; set; }

        [NameInMap("TagResources")]
        [Validation(Required=true)]
        public ListTagResourcesResponseTagResources TagResources { get; set; }
        public class ListTagResourcesResponseTagResources : TeaModel {
            [NameInMap("TagResource")]
            [Validation(Required=true)]
            public List<ListTagResourcesResponseTagResourcesTagResource> TagResource { get; set; }
            public class ListTagResourcesResponseTagResourcesTagResource : TeaModel {
                    public string ResourceType { get; set; }
                    public string ResourceId { get; set; }
                    public string TagKey { get; set; }
                    public string TagValue { get; set; }
            }
        };

    }

}
