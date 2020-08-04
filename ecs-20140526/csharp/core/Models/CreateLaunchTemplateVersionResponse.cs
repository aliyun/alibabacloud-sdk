// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateLaunchTemplateVersionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("LaunchTemplateVersionNumber")]
        [Validation(Required=true)]
        public long LaunchTemplateVersionNumber { get; set; }

    }

}
