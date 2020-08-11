// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CopyNetworkAclEntriesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("NetworkAclId")]
        [Validation(Required=true)]
        public string NetworkAclId { get; set; }

        [NameInMap("SourceNetworkAclId")]
        [Validation(Required=true)]
        public string SourceNetworkAclId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
