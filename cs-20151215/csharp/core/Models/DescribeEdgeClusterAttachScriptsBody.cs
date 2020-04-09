// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeEdgeClusterAttachScriptsBody : TeaModel {
        [NameInMap("options")]
        [Validation(Required=true)]
        public DescribeEdgeClusterAttachScriptsBodyOptions Options { get; set; }
        public class DescribeEdgeClusterAttachScriptsBodyOptions : TeaModel {
            [NameInMap("enableIptables")]
            [Validation(Required=true)]
            public bool? EnableIptables { get; set; }
            [NameInMap("flannelIface")]
            [Validation(Required=true)]
            public string FlannelIface { get; set; }
            [NameInMap("gpuVersion")]
            [Validation(Required=true)]
            public string GpuVersion { get; set; }
            [NameInMap("manageRuntime")]
            [Validation(Required=true)]
            public bool? ManageRuntime { get; set; }
            [NameInMap("nodeName")]
            [Validation(Required=true)]
            public string NodeName { get; set; }
            [NameInMap("nodeNamePrefix")]
            [Validation(Required=true)]
            public string NodeNamePrefix { get; set; }
            [NameInMap("nodeNameStrategy")]
            [Validation(Required=true)]
            public bool? NodeNameStrategy { get; set; }
        };

    }

}
