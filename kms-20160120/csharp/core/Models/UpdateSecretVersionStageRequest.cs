// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class UpdateSecretVersionStageRequest : TeaModel {
        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("VersionStage")]
        [Validation(Required=true)]
        public string VersionStage { get; set; }

        [NameInMap("RemoveFromVersion")]
        [Validation(Required=false)]
        public string RemoveFromVersion { get; set; }

        [NameInMap("MoveToVersion")]
        [Validation(Required=false)]
        public string MoveToVersion { get; set; }

    }

}
