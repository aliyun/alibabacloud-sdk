// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyDiskAttributeRequest : TeaModel {
        [NameInMap("DiskId")]
        [Validation(Required=false)]
        public string DiskId { get; set; }

        [NameInMap("DiskIds")]
        [Validation(Required=false)]
        public List<string> DiskIds { get; set; }

        [NameInMap("DiskName")]
        [Validation(Required=false)]
        public string DiskName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("DeleteWithInstance")]
        [Validation(Required=false)]
        public bool? DeleteWithInstance { get; set; }

        [NameInMap("DeleteAutoSnapshot")]
        [Validation(Required=false)]
        public bool? DeleteAutoSnapshot { get; set; }

        [NameInMap("EnableAutoSnapshot")]
        [Validation(Required=false)]
        public bool? EnableAutoSnapshot { get; set; }

    }

}
