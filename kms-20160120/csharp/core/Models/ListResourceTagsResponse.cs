// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ListResourceTagsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public ListResourceTagsResponseTags Tags { get; set; }
        public class ListResourceTagsResponseTags : TeaModel {
            [NameInMap("Tag")]
            [Validation(Required=true)]
            public List<ListResourceTagsResponseTagsTag> Tag { get; set; }
            public class ListResourceTagsResponseTagsTag : TeaModel {
                    public string KeyId { get; set; }
                    public string TagKey { get; set; }
                    public string TagValue { get; set; }
            }
        };

    }

}
