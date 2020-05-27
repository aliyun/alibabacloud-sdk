// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetStackInstanceRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("StackGroupName")]
        [Validation(Required=true)]
        public string StackGroupName { get; set; }

        [NameInMap("StackInstanceAccountId")]
        [Validation(Required=true)]
        public string StackInstanceAccountId { get; set; }

        [NameInMap("StackInstanceRegionId")]
        [Validation(Required=true)]
        public string StackInstanceRegionId { get; set; }

    }

}
