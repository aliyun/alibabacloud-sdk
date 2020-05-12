// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class GetSecretValueResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("VersionId")]
        [Validation(Required=true)]
        public string VersionId { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("SecretData")]
        [Validation(Required=true)]
        public string SecretData { get; set; }

        [NameInMap("SecretDataType")]
        [Validation(Required=true)]
        public string SecretDataType { get; set; }

        [NameInMap("VersionStages")]
        [Validation(Required=true)]
        public GetSecretValueResponseVersionStages VersionStages { get; set; }
        public class GetSecretValueResponseVersionStages : TeaModel {
            [NameInMap("VersionStage")]
            [Validation(Required=true)]
            public List<string> VersionStage { get; set; }
        };

    }

}
