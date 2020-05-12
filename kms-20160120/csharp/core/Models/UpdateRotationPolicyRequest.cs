// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class UpdateRotationPolicyRequest : TeaModel {
        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("EnableAutomaticRotation")]
        [Validation(Required=true)]
        public bool? EnableAutomaticRotation { get; set; }

        [NameInMap("RotationInterval")]
        [Validation(Required=false)]
        public string RotationInterval { get; set; }

    }

}
