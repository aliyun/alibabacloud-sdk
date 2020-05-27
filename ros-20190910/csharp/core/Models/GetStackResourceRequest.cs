// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetStackResourceRequest : TeaModel {
        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ShowResourceAttributes")]
        [Validation(Required=false)]
        public bool? ShowResourceAttributes { get; set; }

        [NameInMap("LogicalResourceId")]
        [Validation(Required=true)]
        public string LogicalResourceId { get; set; }

    }

}
