// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
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
        public List<ListTagResourcesResponseTagResources> TagResources { get; set; }
        public class ListTagResourcesResponseTagResources : TeaModel {
            [NameInMap("TagKey")]
            [Validation(Required=true)]
            public string TagKey { get; set; }

            [NameInMap("TagValue")]
            [Validation(Required=true)]
            public string TagValue { get; set; }

            [NameInMap("ResourceId")]
            [Validation(Required=true)]
            public string ResourceId { get; set; }

            [NameInMap("ResourceType")]
            [Validation(Required=true)]
            public string ResourceType { get; set; }

        }

    }

}
