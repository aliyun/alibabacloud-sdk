// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class UnassociateNetworkAclRequest : TeaModel {
        [NameInMap("Resource")]
        [Validation(Required=false)]
        public List<UnassociateNetworkAclRequestResource> Resource { get; set; }
        public class UnassociateNetworkAclRequestResource : TeaModel {
            [NameInMap("ResourceType")]
            [Validation(Required=true)]
            public string ResourceType { get; set; }

            [NameInMap("ResourceId")]
            [Validation(Required=true)]
            public string ResourceId { get; set; }

        }

        [NameInMap("NetworkAclId")]
        [Validation(Required=true)]
        public string NetworkAclId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
