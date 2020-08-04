// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyDedicatedHostAttributeRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("DedicatedHostId")]
        [Validation(Required=true)]
        public string DedicatedHostId { get; set; }

        [NameInMap("DedicatedHostName")]
        [Validation(Required=false)]
        public string DedicatedHostName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("ActionOnMaintenance")]
        [Validation(Required=false)]
        public string ActionOnMaintenance { get; set; }

        [NameInMap("NetworkAttributes")]
        [Validation(Required=true)]
        public ModifyDedicatedHostAttributeRequestNetworkAttributes NetworkAttributes { get; set; }
        public class ModifyDedicatedHostAttributeRequestNetworkAttributes : TeaModel {
            [NameInMap("SlbUdpTimeout")]
            [Validation(Required=false)]
            public int? SlbUdpTimeout { get; set; }
            [NameInMap("UdpTimeout")]
            [Validation(Required=false)]
            public int? UdpTimeout { get; set; }
        };

        [NameInMap("AutoPlacement")]
        [Validation(Required=false)]
        public string AutoPlacement { get; set; }

    }

}
