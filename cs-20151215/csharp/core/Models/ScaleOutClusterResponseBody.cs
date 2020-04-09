// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class ScaleOutClusterResponseBody : TeaModel {
        [NameInMap("cluster_id")]
        [Validation(Required=true)]
        public string ClusterId { get; set; }

        [NameInMap("request_id")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("task_id")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

        [NameInMap("instanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

    }

}
