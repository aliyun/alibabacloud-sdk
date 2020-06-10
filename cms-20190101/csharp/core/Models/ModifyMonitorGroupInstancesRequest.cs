// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class ModifyMonitorGroupInstancesRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public long GroupId { get; set; }

        [NameInMap("Instances")]
        [Validation(Required=true)]
        public List<ModifyMonitorGroupInstancesRequestInstances> Instances { get; set; }
        public class ModifyMonitorGroupInstancesRequestInstances : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=true)]
            public string Category { get; set; }

            [NameInMap("InstanceId")]
            [Validation(Required=true)]
            public string InstanceId { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("InstanceName")]
            [Validation(Required=true)]
            public string InstanceName { get; set; }

        }

    }

}
