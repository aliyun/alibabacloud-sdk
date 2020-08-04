// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CopySnapshotRequest : TeaModel {
        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<CopySnapshotRequestTag> Tag { get; set; }
        public class CopySnapshotRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("DestinationRegionId")]
        [Validation(Required=true)]
        public string DestinationRegionId { get; set; }

        [NameInMap("SnapshotId")]
        [Validation(Required=true)]
        public string SnapshotId { get; set; }

        [NameInMap("DestinationSnapshotName")]
        [Validation(Required=true)]
        public string DestinationSnapshotName { get; set; }

        [NameInMap("DestinationSnapshotDescription")]
        [Validation(Required=true)]
        public string DestinationSnapshotDescription { get; set; }

        [NameInMap("RetentionDays")]
        [Validation(Required=false)]
        public int? RetentionDays { get; set; }

    }

}
