// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeServerRelatedGlobalAccelerationInstancesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ServerId")]
        [Validation(Required=true)]
        public string ServerId { get; set; }

        [NameInMap("ServerType")]
        [Validation(Required=false)]
        public string ServerType { get; set; }

    }

}
