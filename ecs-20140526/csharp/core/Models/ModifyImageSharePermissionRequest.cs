// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyImageSharePermissionRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ImageId")]
        [Validation(Required=true)]
        public string ImageId { get; set; }

        [NameInMap("AddAccount")]
        [Validation(Required=false)]
        public List<string> AddAccount { get; set; }

        [NameInMap("RemoveAccount")]
        [Validation(Required=false)]
        public List<string> RemoveAccount { get; set; }

        [NameInMap("LaunchPermission")]
        [Validation(Required=false)]
        public string LaunchPermission { get; set; }

    }

}
