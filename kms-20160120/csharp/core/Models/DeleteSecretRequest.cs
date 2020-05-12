// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class DeleteSecretRequest : TeaModel {
        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("ForceDeleteWithoutRecovery")]
        [Validation(Required=false)]
        public string ForceDeleteWithoutRecovery { get; set; }

        [NameInMap("RecoveryWindowInDays")]
        [Validation(Required=false)]
        public string RecoveryWindowInDays { get; set; }

    }

}
