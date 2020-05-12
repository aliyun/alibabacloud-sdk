// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ListSecretVersionIdsResponse : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SecretName")]
        [Validation(Required=true)]
        public string SecretName { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("VersionIds")]
        [Validation(Required=true)]
        public ListSecretVersionIdsResponseVersionIds VersionIds { get; set; }
        public class ListSecretVersionIdsResponseVersionIds : TeaModel {
            [NameInMap("VersionId")]
            [Validation(Required=true)]
            public List<ListSecretVersionIdsResponseVersionIdsVersionId> VersionId { get; set; }
            public class ListSecretVersionIdsResponseVersionIdsVersionId : TeaModel {
                    public string CreateTime { get; set; }
                    public string VersionId { get; set; }
                    public ListSecretVersionIdsResponseVersionIdsVersionIdVersionStages VersionStages { get; set; }
                    public class ListSecretVersionIdsResponseVersionIdsVersionIdVersionStages : TeaModel {
                        [NameInMap("VersionStage")]
                        [Validation(Required=true)]
                        public List<string> VersionStage { get; set; }

                    }
            }
        };

    }

}
