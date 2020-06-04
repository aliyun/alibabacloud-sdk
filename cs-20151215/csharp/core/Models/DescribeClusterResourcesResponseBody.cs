// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClusterResourcesResponseBody : TeaModel {
        [NameInMap("instance_id")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("resource_type")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

        [NameInMap("resource_info")]
        [Validation(Required=true)]
        public string ResourceInfo { get; set; }

        [NameInMap("state")]
        [Validation(Required=true)]
        public string State { get; set; }

    }

}
