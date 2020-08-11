// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class AddGlobalAccelerationInstanceIpRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("GlobalAccelerationInstanceId")]
        [Validation(Required=true)]
        public string GlobalAccelerationInstanceId { get; set; }

        [NameInMap("IpInstanceId")]
        [Validation(Required=true)]
        public string IpInstanceId { get; set; }

    }

}
