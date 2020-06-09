// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeAutoSnapshotTasksRequest : TeaModel {
        [NameInMap("FileSystemIds")]
        [Validation(Required=false)]
        public string FileSystemIds { get; set; }

        [NameInMap("AutoSnapshotPolicyIds")]
        [Validation(Required=false)]
        public string AutoSnapshotPolicyIds { get; set; }

        [NameInMap("FileSystemType")]
        [Validation(Required=true)]
        public string FileSystemType { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

    }

}
