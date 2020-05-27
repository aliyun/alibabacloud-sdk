// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetResourceTypeResponse : TeaModel {
        [NameInMap("Attributes")]
        [Validation(Required=true)]
        public Dictionary<string, string> Attributes { get; set; }

        [NameInMap("Properties")]
        [Validation(Required=true)]
        public Dictionary<string, string> Properties { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

        [NameInMap("SupportDriftDetection")]
        [Validation(Required=true)]
        public bool? SupportDriftDetection { get; set; }

    }

}
