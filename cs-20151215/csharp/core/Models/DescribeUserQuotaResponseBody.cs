// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeUserQuotaResponseBody : TeaModel {
        [NameInMap("cluster_quota")]
        [Validation(Required=true)]
        public int? ClusterQuota { get; set; }

        [NameInMap("node_quota")]
        [Validation(Required=true)]
        public int? NodeQuota { get; set; }

        [NameInMap("ask_cluster_quota")]
        [Validation(Required=true)]
        public int? AskClusterQuota { get; set; }

        [NameInMap("amk_cluster_quota")]
        [Validation(Required=true)]
        public int? AmkClusterQuota { get; set; }

    }

}
