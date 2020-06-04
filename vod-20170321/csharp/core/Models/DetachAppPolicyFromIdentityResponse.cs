// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DetachAppPolicyFromIdentityResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NonExistPolicyNames")]
        [Validation(Required=true)]
        public List<string> NonExistPolicyNames { get; set; }

        [NameInMap("FailedPolicyNames")]
        [Validation(Required=true)]
        public List<string> FailedPolicyNames { get; set; }

    }

}
