// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ReportInstancesStatusRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public List<string> InstanceId { get; set; }

        [NameInMap("DiskId")]
        [Validation(Required=false)]
        public List<string> DiskId { get; set; }

        [NameInMap("Device")]
        [Validation(Required=false)]
        public List<string> Device { get; set; }

        [NameInMap("Reason")]
        [Validation(Required=true)]
        public string Reason { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=false)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=false)]
        public string EndTime { get; set; }

    }

}
