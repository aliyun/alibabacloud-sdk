// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class UpdateStackTemplateByResourcesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("OldTemplateBody")]
        [Validation(Required=true)]
        public string OldTemplateBody { get; set; }

        [NameInMap("NewTemplateBody")]
        [Validation(Required=true)]
        public string NewTemplateBody { get; set; }

    }

}
