// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ExportSnapshotRequest : TeaModel {
        [NameInMap("SnapshotId")]
        [Validation(Required=true)]
        public string SnapshotId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("OssBucket")]
        [Validation(Required=true)]
        public string OssBucket { get; set; }

        [NameInMap("RoleName")]
        [Validation(Required=false)]
        public string RoleName { get; set; }

    }

}
