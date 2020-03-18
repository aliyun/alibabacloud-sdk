// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class DescribeContainerLogResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ContainerName")]
        [Validation(Required=true)]
        public string ContainerName { get; set; }

        [NameInMap("Content")]
        [Validation(Required=true)]
        public string Content { get; set; }

    }

}
