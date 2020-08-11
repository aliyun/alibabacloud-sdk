// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class MoveResourceGroupRequest : TeaModel {
        [NameInMap("ResourceId")]
        [Validation(Required=true)]
        public string ResourceId { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

        [NameInMap("NewResourceGroupId")]
        [Validation(Required=true)]
        public string NewResourceGroupId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

    }

}
