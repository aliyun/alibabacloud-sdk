// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class InvokeCommandRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("CommandId")]
        [Validation(Required=true)]
        public string CommandId { get; set; }

        [NameInMap("Timed")]
        [Validation(Required=false)]
        public bool? Timed { get; set; }

        [NameInMap("Frequency")]
        [Validation(Required=false)]
        public string Frequency { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public List<string> InstanceId { get; set; }

        [NameInMap("Parameters")]
        [Validation(Required=false)]
        public Dictionary<string, string> Parameters { get; set; }

    }

}
