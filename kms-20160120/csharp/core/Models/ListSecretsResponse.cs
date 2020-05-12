// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ListSecretsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("SecretList")]
        [Validation(Required=true)]
        public ListSecretsResponseSecretList SecretList { get; set; }
        public class ListSecretsResponseSecretList : TeaModel {
            [NameInMap("Secret")]
            [Validation(Required=true)]
            public List<ListSecretsResponseSecretListSecret> Secret { get; set; }
            public class ListSecretsResponseSecretListSecret : TeaModel {
                    public string SecretName { get; set; }
                    public string CreateTime { get; set; }
                    public string UpdateTime { get; set; }
                    public string PlannedDeleteTime { get; set; }
                    public ListSecretsResponseSecretListSecretTags Tags { get; set; }
                    public class ListSecretsResponseSecretListSecretTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<ListSecretsResponseSecretListSecretTagsTag> Tag { get; set; }
                        public class ListSecretsResponseSecretListSecretTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
            }
        };

    }

}
