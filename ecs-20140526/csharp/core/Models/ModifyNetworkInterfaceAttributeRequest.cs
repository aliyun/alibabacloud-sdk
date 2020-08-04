// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyNetworkInterfaceAttributeRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("SecurityGroupId")]
        [Validation(Required=false)]
        public List<string> SecurityGroupId { get; set; }

        [NameInMap("NetworkInterfaceName")]
        [Validation(Required=false)]
        public string NetworkInterfaceName { get; set; }

        [NameInMap("NetworkInterfaceId")]
        [Validation(Required=true)]
        public string NetworkInterfaceId { get; set; }

        [NameInMap("QueueNumber")]
        [Validation(Required=false)]
        public int? QueueNumber { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

    }

}
