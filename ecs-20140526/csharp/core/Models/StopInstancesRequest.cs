// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class StopInstancesRequest : TeaModel {
        [NameInMap("DryRun")]
        [Validation(Required=false)]
        public bool? DryRun { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public List<string> InstanceId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ForceStop")]
        [Validation(Required=false)]
        public bool? ForceStop { get; set; }

        [NameInMap("StoppedMode")]
        [Validation(Required=false)]
        public string StoppedMode { get; set; }

        [NameInMap("BatchOptimization")]
        [Validation(Required=false)]
        public string BatchOptimization { get; set; }

    }

}
