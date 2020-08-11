// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class AssociateGlobalAccelerationInstanceRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("GlobalAccelerationInstanceId")]
        [Validation(Required=true)]
        public string GlobalAccelerationInstanceId { get; set; }

        [NameInMap("BackendServerId")]
        [Validation(Required=true)]
        public string BackendServerId { get; set; }

        [NameInMap("BackendServerRegionId")]
        [Validation(Required=true)]
        public string BackendServerRegionId { get; set; }

        [NameInMap("BackendServerType")]
        [Validation(Required=false)]
        public string BackendServerType { get; set; }

    }

}
