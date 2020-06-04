// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListSnapshotsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MediaSnapshot")]
        [Validation(Required=true)]
        public ListSnapshotsResponseMediaSnapshot MediaSnapshot { get; set; }
        public class ListSnapshotsResponseMediaSnapshot : TeaModel {
            [NameInMap("Total")]
            [Validation(Required=true)]
            public long Total { get; set; }
            [NameInMap("Regular")]
            [Validation(Required=true)]
            public string Regular { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("JobId")]
            [Validation(Required=true)]
            public string JobId { get; set; }
            [NameInMap("Snapshots")]
            [Validation(Required=true)]
            public ListSnapshotsResponseMediaSnapshotSnapshots Snapshots { get; set; }
            public class ListSnapshotsResponseMediaSnapshotSnapshots : TeaModel {
                [NameInMap("Snapshot")]
                [Validation(Required=true)]
                public List<ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot> Snapshot { get; set; }
                public class ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot : TeaModel {
                    [NameInMap("Index")]
                    [Validation(Required=true)]
                    public long Index { get; set; }

                    [NameInMap("Url")]
                    [Validation(Required=true)]
                    public string Url { get; set; }

                }

            }
        };

    }

}
