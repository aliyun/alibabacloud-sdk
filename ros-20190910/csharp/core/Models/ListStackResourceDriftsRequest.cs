// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackResourceDriftsRequest : TeaModel {
        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("MaxResults")]
        [Validation(Required=false)]
        public long MaxResults { get; set; }

        [NameInMap("ResourceDriftStatus")]
        [Validation(Required=false)]
        public List<string> ResourceDriftStatus { get; set; }

        [NameInMap("NextToken")]
        [Validation(Required=false)]
        public string NextToken { get; set; }

    }

}
