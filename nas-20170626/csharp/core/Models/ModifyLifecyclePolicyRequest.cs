// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class ModifyLifecyclePolicyRequest : TeaModel {
        [NameInMap("FileSystemId")]
        [Validation(Required=true)]
        public string FileSystemId { get; set; }

        [NameInMap("LifecyclePolicyName")]
        [Validation(Required=true)]
        public string LifecyclePolicyName { get; set; }

        [NameInMap("Path")]
        [Validation(Required=true)]
        public string Path { get; set; }

        [NameInMap("LifecycleRuleName")]
        [Validation(Required=true)]
        public string LifecycleRuleName { get; set; }

        [NameInMap("StorageType")]
        [Validation(Required=true)]
        public string StorageType { get; set; }

    }

}
