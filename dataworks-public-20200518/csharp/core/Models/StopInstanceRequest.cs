// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class StopInstanceRequest : TeaModel {
        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public long InstanceId { get; set; }

        [NameInMap("ProjectEnv")]
        [Validation(Required=true)]
        public string ProjectEnv { get; set; }

    }

}
