// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifySecurityGroupPolicyRequest : TeaModel {
        [NameInMap("SecurityGroupId")]
        [Validation(Required=true)]
        public string SecurityGroupId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InnerAccessPolicy")]
        [Validation(Required=true)]
        public string InnerAccessPolicy { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
