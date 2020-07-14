// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Eci20180808.Models
{
    public class DescribeContainerLogRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ContainerGroupId")]
        [Validation(Required=true)]
        public string ContainerGroupId { get; set; }

        [NameInMap("ContainerName")]
        [Validation(Required=true)]
        public string ContainerName { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=false)]
        public string StartTime { get; set; }

        [NameInMap("Tail")]
        [Validation(Required=false)]
        public int? Tail { get; set; }

        [NameInMap("LastTime")]
        [Validation(Required=false)]
        public bool? LastTime { get; set; }

        [NameInMap("SinceSeconds")]
        [Validation(Required=false)]
        public int? SinceSeconds { get; set; }

        [NameInMap("LimitBytes")]
        [Validation(Required=false)]
        public long LimitBytes { get; set; }

    }

}
