// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SubmitSnapshotJobResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SnapshotJob")]
        [Validation(Required=true)]
        public SubmitSnapshotJobResponseSnapshotJob SnapshotJob { get; set; }
        public class SubmitSnapshotJobResponseSnapshotJob : TeaModel {
            [NameInMap("JobId")]
            [Validation(Required=true)]
            public string JobId { get; set; }
        };

    }

}
