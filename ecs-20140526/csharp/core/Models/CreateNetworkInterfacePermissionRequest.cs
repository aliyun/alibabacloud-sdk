// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateNetworkInterfacePermissionRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("AccountId")]
        [Validation(Required=true)]
        public long AccountId { get; set; }

        [NameInMap("NetworkInterfaceId")]
        [Validation(Required=true)]
        public string NetworkInterfaceId { get; set; }

        [NameInMap("Permission")]
        [Validation(Required=true)]
        public string Permission { get; set; }

    }

}
