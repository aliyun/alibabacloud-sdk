// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class ListTagResourcesQuery : TeaModel {
        [NameInMap("next_token")]
        [Validation(Required=false)]
        public string NextToken { get; set; }

        [NameInMap("resource_ids")]
        [Validation(Required=false)]
        public string ResourceIds { get; set; }

        [NameInMap("tags")]
        [Validation(Required=false)]
        public string Tags { get; set; }

        [NameInMap("resource_type")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

    }

}
