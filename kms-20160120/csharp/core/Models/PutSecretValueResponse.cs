// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class PutSecretValueResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("VersionId")]
        [Validation(Required=true)]
        public string VersionId { get; set; }

        [NameInMap("VersionStages")]
        [Validation(Required=true)]
        public PutSecretValueResponseVersionStages VersionStages { get; set; }
        public class PutSecretValueResponseVersionStages : TeaModel {
            [NameInMap("VersionStage")]
            [Validation(Required=true)]
            public List<string> VersionStage { get; set; }
        };

    }

}
