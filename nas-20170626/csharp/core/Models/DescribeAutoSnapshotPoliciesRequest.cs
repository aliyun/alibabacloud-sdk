// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeAutoSnapshotPoliciesRequest : TeaModel {
        [NameInMap("AutoSnapshotPolicyId")]
        [Validation(Required=false)]
        public string AutoSnapshotPolicyId { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("FileSystemType")]
        [Validation(Required=true)]
        public string FileSystemType { get; set; }

    }

}
