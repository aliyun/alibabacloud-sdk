// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyImageShareGroupPermissionRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ImageId")]
        [Validation(Required=true)]
        public string ImageId { get; set; }

        [NameInMap("AddGroup")]
        [Validation(Required=false)]
        public List<string> AddGroup { get; set; }

        [NameInMap("RemoveGroup")]
        [Validation(Required=false)]
        public List<string> RemoveGroup { get; set; }

    }

}
