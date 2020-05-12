// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClusterLogsResponseBody : TeaModel {
        [NameInMap("cluster_id")]
        [Validation(Required=true)]
        public string ClusterId { get; set; }

        [NameInMap("cluster_log")]
        [Validation(Required=true)]
        public string ClusterLog { get; set; }

        [NameInMap("log_level")]
        [Validation(Required=true)]
        public string LogLevel { get; set; }

        [NameInMap("created")]
        [Validation(Required=true)]
        public string Created { get; set; }

    }

}
